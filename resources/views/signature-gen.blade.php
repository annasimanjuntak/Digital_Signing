{{-- @extends('layouts\master')
@section('title', 'Signature')
@section('username', 'Ryan Tanoto')
@section('content') --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="description" content="Create your own electronic signature by using the signature generator online.
    It is editable, customizable, downloadable and completely free.">
    <script>(function (a, b, c, d, e) { a[d] = a[d] || [], a[d].push({ "gtm.start": new Date().getTime(), event: "gtm.js" }); var g = b.getElementsByTagName(c)[0], f = b.createElement(c), h = "dataLayer" == d ? "" : "&l=" + d; f.async = !0, f.src = "https://www.googletagmanager.com/gtm.js?id=" + e + h, g.parentNode.insertBefore(f, g) })(window, document, "script", "dataLayer", "GTM-TCTZH69");</script>
    <meta name="description" content="Create your own electronic signature by using the signature generator online.
    It is editable, customizable, downloadable and completely free. ">
    <link href="/assets/css/resources/common-e4bedb893d.css" rel="stylesheet" />
    <link href="/assets/css/resources/support-1f3b8b4d51.css" rel="stylesheet" />
    <link href="/assets/css/resources/index-866455641e.css" rel="stylesheet" />

</head>

<body>
  <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <form id="myAwesomeForm" action="/text-sign" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">


                                    <p class="title text-center" style="font-size: 20px;">Create Your Signature</p>
                                    <ul class="menu-cont" style="margin: 20px 0px 5px 0px;">
                                        <li class="menu-item" hidden>Draw Signature</li>
                                        <li class="menu-item active" style="color: #3c3c3c;">Type Signature</li>
                                    </ul>
                                    <div class="draw-doc sign-content-draw" hidden>
                                        <div class="draw-txt"><canvas id="signature-pad" class="panel"></canvas>
                                            <ul class="flexible flex-align-center flex-justify-center flex-wrap-wrap color"
                                                id="color-group">
                                                <li class="a actived" color="#242424"></li>
                                                <li class="b" color="#666"></li>
                                                <li class="c" color="#ccc"></li>
                                                <li class="d" color="#E02020"></li>
                                                <li class="e" color="#FFA75B"></li>
                                                <li class="f" color="#FEA177"></li>
                                                <li class="g" color="#0091FF"></li>
                                                <li class="h" color="#32C5FF"></li>
                                                <li class="i" color="#65DBDB"></li>
                                                <li class="j" color="#14BE88"></li>
                                                <li class="k" color="#3ECF8E"></li>
                                                <li class="l" color="#7FE4C3"></li>
                                                <li class="m" color="#6236FF"></li>
                                                <li class="n" color="#91A3F2"></li>
                                                <li class="o"><input type="color" id="changeColor"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" width="24" height="24">
                                                        <defs>
                                                            <linearGradient id="a" x1="100%" x2="0%" y1="0%" y2="100%">
                                                                <stop offset="0%" stop-color="#32C5FF" />
                                                                <stop offset="51.26%" stop-color="#B620E0" />
                                                                <stop offset="100%" stop-color="#F7B500" />
                                                            </linearGradient>
                                                        </defs>
                                                        <g fill="none" fill-rule="evenodd">
                                                            <circle cx="12" cy="12" r="12" fill="url(#a)" />
                                                            <path stroke="#FFF"
                                                                d="M11.2 10.88l-3.15 5.45.55 2.05 2.05-.55 3.15-5.45-2.6-1.5z" />
                                                            <path fill="#FFF" d="M11.15 7.97l5.2 3-1 1.73-5.2-3z" />
                                                            <path fill="#FFF"
                                                                d="M15.75 6a2 2 0 01.73 2.74l-1 1.73-3.46-2 1-1.73A2 2 0 0115.75 6z" />
                                                        </g>
                                                    </svg></li>
                                                <li class="clear-btn flex-center" style="background-color:#fff;margin-left:20px"><svg
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.801636 2.4707C0.801636 2.82383 1.08757 3.11133 1.44226 3.11133H14.5376C14.8907 3.11133 15.1782 2.82539 15.1782 2.4707C15.1782 2.11758 14.8923 1.83008 14.5376 1.83008H1.44226C1.08757 1.83164 0.801636 2.11758 0.801636 2.4707Z"
                                                            fill="#242424" />
                                                        <path
                                                            d="M8.46414 0.432617H7.66101C7.30789 0.432617 7.02039 0.718555 7.02039 1.07324V2.47168C7.02039 2.82481 7.30632 3.11231 7.66101 3.11231H8.46414C8.81726 3.11231 9.10476 2.82637 9.10476 2.47168V1.07168C9.10476 0.718555 8.81726 0.432617 8.46414 0.432617ZM12.686 15.4779H3.2907C2.67976 15.4779 2.18445 14.9826 2.18445 14.3717V3.76387H13.7923V14.3717C13.7923 14.9842 13.297 15.4779 12.686 15.4779Z"
                                                            fill="#242424" />
                                                        <path
                                                            d="M11.1141 5.13867C10.761 5.13867 10.4735 5.42461 10.4735 5.7793V12.9371C10.4735 13.2902 10.7594 13.5777 11.1141 13.5777C11.4673 13.5777 11.7548 13.2918 11.7548 12.9371V5.77773C11.7548 5.42461 11.4673 5.13867 11.1141 5.13867ZM4.86414 5.13867C4.51101 5.13867 4.22351 5.42461 4.22351 5.7793V12.9371C4.22351 13.2902 4.50945 13.5777 4.86414 13.5777C5.21726 13.5777 5.50476 13.2918 5.50476 12.9371V5.77773C5.50476 5.42461 5.21726 5.13867 4.86414 5.13867ZM7.98914 5.13867C7.63601 5.13867 7.34851 5.42461 7.34851 5.7793V12.9371C7.34851 13.2902 7.63445 13.5777 7.98914 13.5777C8.34226 13.5777 8.62976 13.2918 8.62976 12.9371V5.77773C8.62976 5.42461 8.34226 5.13867 7.98914 5.13867Z"
                                                            fill="white" />
                                                    </svg></li>
                                            </ul>
                                        </div>
                                        <div class="group-btn text-center">

                                            <button class="btn green-btn next-btn">Save</button></div>
                                    </div>
                                    <div class="sign-content-type" style="display: block;"><input type="text" name="type_name" placeholder="Type your name here" class="type-name">
                                        <div class="opt-cont flex-center">
                                            <div class="left-cont flex-center">
                                                <p class="font-view">Signature</p>
                                            </div>
                                            <div class="right-cont">
                                                <div class="info-item"><span class="label">Font</span> <select name="font"
                                                        class="font-select" style="margin-top: -20px;"></select></div>

                                                <div class="info-item" hidden><span class="label">Font Size</span> <select name="font"
                                                        class="font-size-select" hidden>
                                                        <option value="14">24</option>
                                                        <option value="18">18</option>
                                                        <option value="24">24</option>
                                                        <option value="30" selected="selected">30</option>
                                                        <option value="36">36</option>
                                                        <option value="48">48</option>
                                                        <option value="60">60</option>
                                                        <option value="72">72</option>
                                                        <option value="96">96</option>
                                                    </select>
                                                </div>


                                                 <div class="info-item" hidden><span class="label" hidden>Color</span>
                                                    <div class="flex-bt" hidden>
                                                        <div class="color-view color" hidden><input type="color" class="color-select" hidden></div><input
                                                            type="text" maxlength="6" readonly="readonly" class="color-input color"
                                                            value="#000000" placeholder="#000000" hidden>
                                                    </div>
                                                </div>
                                                <div class="info-item" hidden><span class="label" hidden>Background</span>
                                                    <div class="flex-bt" hidden>
                                                        <div class="color-view bg-color" hidden><input type="color" class="color-select" hidden></div>
                                                        <input type="text" maxlength="6" readonly="readonly" class="color-input bg-color"
                                                            value="transparent" placeholder="transparent" hidden>
                                                    </div>
                                                </div>

                                                <input type="text" name="generatedbase64" id="generatedbase64" >

                                                <div class="group-btn text-center">
                                                    <button
                                                        class="btn green-btn type-save-btn">Save</button>
                                                </div>
                                                <!-- <div class="info-item range"><span class="label">Slope</span>
                                                    <div class="design-value-cont">
                                                        <div class="font-size-view text-center">0</div><input type="range" min="-180"
                                                            max="180" value="0" step="1" class="font-range slope" />
                                                    </div>
                                                </div>
                                                <div class="info-item range"><span class="label">Slant</span>
                                                    <div class="design-value-cont">
                                                        <div class="font-size-view text-center">0</div><input type="range" min="-30"
                                                            max="30" value="0" step="1" class="font-range slant" />
                                                    </div>
                                                </div>  -->
                                            </div>
                                        </div>

                                    </div>


                            <aside class="download-pic hidden flex-center">
                                <div class="dialog"><svg class="close-btn" width="10" viewBox="0 0 10 10"
                                        xmlns="http://www.w3.org/2000/svg">

                                    </svg>

                                </div>
                            </aside>

                        </div>
                        </div>
                        </div>
                       </div>
                    </form>
                </div>
            </div>


</body>
<script src="/assets/js/resources/webfontloader.min.js"></script>
<script src="/assets/js/resources/jquery-3.4.1.min.js"></script>
<script src="/assets/js/resources/axios.min.js"></script>
<script src="/assets/js/resources/common-f46c76a024.js"></script>
<script src="/assets/js/resources/signature.min.js"></script>
<script src="/assets/js/resources/download.min.js"></script>
<script src="/assets/js/resources/statis-80903004b2.js"></script>
<!-- <script src="https://signature-generator.com/js/webfontloader.min.js"></script>
    <script src="https://signature-generator.com/js/jquery-3.4.1.min.js"></script>
    <script src="https://signature-generator.com/js/axios.min.js"></script>
    <script src="https://signature-generator.com/js/common-f46c76a024.js"></script>
    <script src="https://signature-generator.com/js/signature.min.js"></script>
    <script src="https://signature-generator.com/js/download.min.js"></script>
    <script src="https://signature-generator.com/js/statis-80903004b2.js"></script> -->
    <script >

         var canvas = document.getElementById("signature-pad"),
        downloadWrap = document.querySelector(".download-pic"),
        liGroup = document.querySelectorAll("#color-group li:not(:last-child)"),
        dataSrc = null,
        changeImg = document.getElementById("changeImg");



        function firstLetter(a){
            let name = a;
            let rgx = new RegExp(/(\p{L}{1})\p{L}+/, 'gu');

            let initials = [...name.matchAll(rgx)] || [];

            initials = (
            (initials.shift()?.[1] || '') + (initials.pop()?.[1] || '')
            ).toUpperCase();

            return initials;
        }
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
        }),

        $(".type-name").on("input", function(a) {
            $(".font-view").text(a.target.value)
        }),

        $(".font-select").on("change", function(a) {
            $(".font-view").css("fontFamily", a.target.value)
        }),

        $(".font-size-select").on("change", function(a) {
            $(".font-view").css("fontSize", a.target.value + "px")
        }),

        $(".color-select").on("input", function(a) {
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
        $(".type-save-btn").on("click", function() {

           var a = $(".font-view").text(),
                b = $(".font-size-select option:selected").text(),
                c = $(".font-select option:selected").text(),
                d = $(".color-input.color").val(),
                e = $(".color-input.bg-color").val(),
                f = $(".font-range.slope").val(),
                g = $(".font-range.slant").val();
            var x = firstLetter(a);
            if (console.log(a, b, c, d, e, f, g), window.sa && window.sa.Track("signature_generator_type", {
                    fontFamily: c,
                    fontSize: b,
                    fontColor: d,
                    bgColor: e,
                    rotate: f,
                    slant: g
                }), !a.trim().length) return void alert("Please enter your signature");
            var h = textToImg(a, b, c, d, e, f, g);
            document.getElementById('generatedbase64').value=h;

        });
        </script>

</html>
{{-- @endsection --}}
