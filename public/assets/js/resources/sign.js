
    var canvas = document.getElementById("signature-pad"),
    downloadWrap = document.querySelector(".download-pic"),
    liGroup = document.querySelectorAll("#color-group li:not(:last-child)"),
    dataSrc = null,
    changeImg = document.getElementById("changeImg");

function resizeCanvas() {
var a = Math.max(window.devicePixelRatio || 1, 1);
canvas.width = canvas.offsetWidth * a, canvas.height = canvas.offsetHeight * a, canvas.getContext("2d").scale(a, a)
}
window.onresize = resizeCanvas, resizeCanvas();
var signaturePad = new SignaturePad(canvas, {
penColor: "#242424"
});
document.querySelector(".clear-btn").addEventListener("click", function() {
signaturePad.clear()
});
for (var i = 0; i < liGroup.length; i++) liGroup[i].addEventListener("click", function() {
for (var a = 0; a < liGroup.length; a++) liGroup[a].classList.remove("actived");
this.classList.add("actived"), signaturePad.penColor = this.getAttribute("color"), changeColor()
});
downloadWrap.addEventListener("click", function(a) {
"ASIDE" == a.target.tagName && downloadWrap.classList.add("hidden")
}), document.getElementById("changeColor").addEventListener("input", function(a) {
signaturePad.penColor = a.target.value, changeColor()
}), document.querySelector(".next-btn").addEventListener("click", function() {
return signaturePad.isEmpty() ? alert("Please provide a signature first.") : void(dataSrc = signaturePad.toDataURL("image/png"), downloadWrap.classList.remove("hidden"), download(dataSrc, "esignature_cocosign.png", "image/png"))
}), document.querySelector(".close-btn").addEventListener("click", function() {
downloadWrap.classList.add("hidden")
});

function changeColor() {
for (var a = signaturePad.toData(), b = 0; b < a.length; b++)
    for (var c = 0; c < a[b].length; c++) signaturePad.penColor && (a[b][c].color = signaturePad.penColor);
signaturePad.fromData(a)
}
var menuList = document.querySelectorAll(".menu-item");
menuList = Array.prototype.slice.call(menuList), menuList.map(function(a, b) {
a.onclick = function() {
    menuList[0 === b ? 1 : 0].classList.remove("active"), this.classList.add("active"), document.querySelector(".sign-content-draw").style.display = 0 === b ? "block" : "none", document.querySelector(".sign-content-type").style.display = 1 === b ? "block" : "none"
}
});
var fontList = ["Dancing Script", "Kaushan Script", "Pacifico", "Indie Flower", "Shadows Into Light", "Satisfy", "Sacramento", "Parisienne", "Damion", "Yellowtail", "Marck Script", "Cedarville Cursive", "Homemade Apple", "Allura", "Reenie Beanie", "Nanum Brush Script", "Calligraffitti", "Dawning of a New Day", "Zeyada", "Give You Glory", "Charmonman", "Dr Sugiyama", "Beth Ellen", "Over the Rainbow", "Lovers Quarrel", "Liu Jian Mao Cao", "Long Cang", "Ruthie"];
WebFont.load({
google: {
    families: fontList
}
}), fontList.map(function(a) {
var b = document.createElement("option");
b.appendChild(document.createTextNode(a)), b.setAttribute("value", a), $(".font-select").append(b)
}), $(".type-name").on("input", function(a) {
$(".font-view").text(a.target.value)
}), $(".font-select").on("change", function(a) {
$(".font-view").css("fontFamily", a.target.value)
}), $(".font-size-select").on("change", function(a) {
$(".font-view").css("fontSize", a.target.value + "px")
}), $(".color-select").on("input", function(a) {
var b = a.target.value,
    c = $(this).parent();
c.css("backgroundColor", b);
const d = b.toUpperCase();
c.siblings(".color-input").val(d), c.hasClass("bg-color") ? $(".left-cont").css("backgroundColor", b) : $(".font-view").css("color", b)
}), $(".font-range").on("input", function(a) {
var b = a.target.value;
$(this).siblings(".font-size-view").text(b);
var c = $(".font-range.slope").val(),
    d = $(".font-range.slant").val();
$(".font-view").css("transform", "rotate(" + c + "deg) skew(" + d + "deg)")
});

function textToImg(a, b, c, d, e, f, g) {
var h = 356,
    i = document.createElement("canvas"),
    j = i.getContext("2d");
i.width = 500, i.height = h, j.clearRect(0, 0, i.width, i.height), j.fillStyle = e, j.fillRect(0, 0, 500, h), j.translate(250, h / 2), j.rotate(f * Math.PI / 180), j.transform(1, 0, .57735 * g / 30, 1, 0, 0), j.fillStyle = d, j.font = b + "px " + c, j.textBaseline = "middle", j.fillText(a, -(j.measureText(a).width / 2), 0);
var k = i.toDataURL("image/png");
return k
}

function b64toBlob(b64Data, contentType, sliceSize) {
    contentType = contentType || '';
    sliceSize = sliceSize || 512;

    var byteCharacters = atob(b64Data);
    var byteArrays = [];

    for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
        var slice = byteCharacters.slice(offset, offset + sliceSize);

        var byteNumbers = new Array(slice.length);
        for (var i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }

        var byteArray = new Uint8Array(byteNumbers);

        byteArrays.push(byteArray);
    }

  var blob = new Blob(byteArrays, {type: contentType});
  return blob;
}


function appendFileAndSubmit(h){
    // Get the form
    var form = document.getElementById("myAwesomeForm");

    var ImageURL = h;
    // Split the base64 string in data and contentType
    var block = ImageURL.split(";");
    // Get the content type
    var contentType = block[0].split(":")[1];// In this case "image/gif"
    // get the real base64 content of the file
    var realData = block[1].split(",")[1];// In this case "iVBORw0KGg...."

    // Convert to blob
    var blob = b64toBlob(realData, contentType);

    // Create a FormData and append the file
    var fd = new FormData(form);
    fd.append("image", blob);

    // Submit Form and upload file
    $.ajax({
        url:"/text-sign",
        data: fd,// the formData function is available in almost all new browsers.
        type:"POST",
        contentType:false,
        processData:false,
        cache:false,
        dataType:"json", // Change this according to your response from the server.
        error:function(err){
            console.error(err);
        },
        success:function(data){
            console.log(data);
        },
        complete:function(){
            console.log("Request finished.");
        }
    });
}


$(".type-save-btn").on("click", function() {
var a = $(".font-view").text(),
    b = $(".font-size-select option:selected").text(),
    c = $(".font-select option:selected").text(),
    d = $(".color-input.color").val(),
    e = $(".color-input.bg-color").val(),
    f = $(".font-range.slope").val(),
    g = $(".font-range.slant").val();
if (console.log(a, b, c, d, e, f, g), window.sa && window.sa.Track("signature_generator_type", {
        fontFamily: c,
        fontSize: b,
        fontColor: d,
        bgColor: e,
        rotate: f,
        slant: g
    }), !a.trim().length) return void alert("Please enter your signature");
var h = textToImg(a, b, c, d, e, f, g);

download(h, a.replace(" ", "_") + "_peruri.png", "image/png"), downloadWrap.classList.remove("hidden");

// appendFileAndSubmit(h);

});
