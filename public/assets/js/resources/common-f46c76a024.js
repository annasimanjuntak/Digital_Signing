window["IS_PRO"] = true;
window["IS_DEV"] = false;
window["IS_TEST"] = false;

window["BASE_URL"] = "https://app.cocosign.com/api";
window["MAIN_DOMAIN"] = "https://signature-generator.com";
window["APP_DOMAIN"] = "https://app.cocosign.com";
("use strict");
var domain = document.domain,
  urlhttp = "https://",
  host = urlhttp + domain + "/",
  bHeight = document.documentElement.clientHeight,
  bWidth = document.documentElement.clientWidth,
  headerFix = document.getElementsByTagName("header")[0],
  returnTop = document.getElementById("return-top"),
  body = document.getElementsByTagName("body")[0],
  breadNav = document.querySelector(".bread-nav"),
  ceSub = document.querySelectorAll("header .ce-sub"),
  mbNav = document.getElementById("mb-nav"),
  logIn = document.getElementById("login-txt"),
  signUp = document.getElementById("signup-txt"),
  thumbGroup = document.getElementById("thumb-group"),
  emailAll = document.querySelectorAll("input[type='email']"),
  passwordAll = document.querySelectorAll("input[type='password']"),
  textInputAll = document.querySelectorAll("input[type='text']"),
  googleEle = document.querySelectorAll(".googleLogin"),
  logoutLink = document.getElementById("logout-link"),
  pullTab = document.querySelectorAll(".pull-tab li[data-index]"),
  pullSwitch = document.querySelectorAll(".pull-switch .cell"),
  loading = document.getElementById("loading"),
  loginPopu = document.querySelector(".loginPopu"),
  loginSendBtn = document.querySelector(".loginPopu .send-btn"),
  videoWrap = document.querySelectorAll(".video-wrap"),
  buildMainDomain = urlhttp + "cocosign.com",
  buildAppDomain = urlhttp + "app.cocosign.com",
  buildApi = urlhttp + "app.cocosign.com/api",
  panelUrl = window.location.search.replace("?curl=", "") || buildAppDomain;
function defaultFun(e) {
  var t, o, n;
  if (
    (console.log(e),
    getCookie("cocosignName") && getCookie("cocosignToken")
      ? (logIn && logIn.classList.add("hidden"),
        signUp && signUp.classList.add("hidden"),
        thumbGroup &&
          (thumbGroup.classList.remove("hidden"),
          (thumbGroup.querySelector(".name").innerText =
            getCookie("cocosignName")),
          (thumbGroup.querySelector(".pho").innerText = getCookie(
            "cocosignName"
          ).substr(0, 1))),
        window.axios &&
          ((axios.defaults.headers.common.Authorization =
            "Bearer " + getCookie("cocosignToken")),
          axios.interceptors.response.use(
            function (e) {
              return e;
            },
            function (e) {
              return msag(e), Promise.reject(e);
            }
          )))
      : (((t = document.createElement("script")).type = "text/javascript"),
        (t.src = "https://accounts.google.com/gsi/client"),
        document.getElementsByTagName("head")[0].appendChild(t),
        (window.onGoogleLibraryLoad = function () {
          google.accounts.id.initialize({
            client_id:
              "536153840831-7bt42utu1edo9efsguvomubof7b74t8u.apps.googleusercontent.com",
            cancel_on_tap_outside: !1,
            callback: googleCredentialResponse,
          }),
            google.accounts.id.prompt();
        })),
    logoutLink &&
      logoutLink.addEventListener("click", function (e) {
        e.preventDefault(),
          delCookie("cocosignName"),
          delCookie("cocosignToken"),
          delCookie("cocosignMemberType"),
          delCookie("cocosignOrderInfo"),
          delCookie("cocosignBought"),
          (window.location.href = host);
      }),
    breadNav &&
      breadNav.addEventListener("click", function (e) {
        e.stopPropagation(),
          this.classList.toggle("actived"),
          mbNav && mbNav.classList.toggle("actived");
      }),
    body.addEventListener("click", function (e) {
      breadNav && breadNav.classList.remove("actived"),
        mbNav && mbNav.classList.remove("actived");
    }),
    mbNav &&
      mbNav.addEventListener("click", function (e) {
        e.stopPropagation();
      }),
    ceSub.length)
  )
    for (var i = 0; i < ceSub.length; i++)
      ceSub[i].addEventListener("touchstart", function () {
        this.classList.toggle("actived"),
          this.nextElementSibling.classList.toggle("hidden");
      });
  if (
    ((headerFix || returnTop) &&
      window.addEventListener(
        "scroll",
        throttle(function () {
          returnTop &&
            (window.pageYOffset > bHeight
              ? returnTop.classList.add("actived")
              : returnTop.classList.remove("actived")),
            headerFix &&
              (60 < window.pageYOffset && !body.getAttribute("data-no-fixed")
                ? headerFix.classList.add("actived")
                : headerFix.classList.remove("actived"));
        })
      ),
    emailAll.length)
  )
    for (var a = 0; a < emailAll.length; a++) {
      var l = "Please enter your email address here",
        r = "Please enter the correct email address";
      emailAll[a].addEventListener("invalid", function (e) {
        e.preventDefault(), validityFun(e, l, r, "", "");
      }),
        emailAll[a].addEventListener("blur", function (e) {
          validityFun(e, l, r, "", "");
        });
    }
  if (passwordAll.length)
    for (var c = 0; c < passwordAll.length; c++) {
      var s = "Please enter the password",
        d = "Password should be more than 6 characters",
        u =
          "Passwords must be 6-16 characters, containing at least 1 letter and 1 number.";
      passwordAll[c].addEventListener("invalid", function (e) {
        e.preventDefault(), validityFun(e, s, "", d, u);
      }),
        passwordAll[c].addEventListener("blur", function (e) {
          validityFun(e, s, "", d, u);
        });
    }
  if (textInputAll.length)
    for (c = 0; c < textInputAll.length; c++) {
      var g = "Please enter the value";
      textInputAll[c].addEventListener("invalid", function (e) {
        var t = e.target.getAttribute("misserr") || g;
        e.preventDefault(), validityFun(e, t);
      }),
        textInputAll[c].addEventListener("blur", function (e) {
          var t = e.target.getAttribute("misserr") || g;
          validityFun(e, t);
        });
    }
  if (
    (googleEle.length &&
      ((o = document.createElement("script")),
      (n = document.getElementsByTagName("head").item(0)),
      (o.src = "https://apis.google.com/js/api:client.js?onload=startApp"),
      (o.language = "javascript"),
      (o.type = "text/javascript"),
      n.appendChild(o)),
    pullTab.length)
  )
    for (var p = 0; p < pullTab.length; p++)
      pullTab[p].addEventListener("click", function () {
        for (
          var e = this.getAttribute("data-index"), t = 0;
          t < pullTab.length;
          t++
        )
          pullSwitch[t].classList.add("hidden"),
            pullTab[t].classList.remove("actived");
        this.classList.add("actived"), pullSwitch[e].classList.remove("hidden");
      });
  if (videoWrap.length)
    for (var m = 0; m < videoWrap.length; m++)
      videoWrap[m].addEventListener("click", function () {
        var e = this.querySelector("iframe").getAttribute("src");
        this.querySelector(".bg").classList.add("hidden"),
          this.querySelector("iframe").setAttribute("src", e + "?autoplay=1");
      });
}
function loginXhr(e, t) {
  var o = axios
    .post(e, t, { headers: { Authorization: "" } })
    .then(function (e) {
      var t, o;
      0 !== e.data.errorCode
        ? alert(e.data.errorMsg)
        : ((t = e.data.data.token),
          (o = e.data.data.firstName + " " + e.data.data.lastName),
          setCookie("cocosignToken", t, 1),
          setCookie("cocosignName", o, 1),
          setCookie("cocosignMemberType", e.data.data.memberType, 1),
          setCookie(
            "cocosignTheme",
            ["#B620E0", "#2361F9", "#F79762", "#F77062", "#F7B000", "#00C2A7"],
            1
          ),
          getQueryVariable("pid")
            ? (loading.classList.remove("hidden"),
              (axios.defaults.headers.common.Authorization =
                "Bearer " + getCookie("cocosignToken")),
              complete(
                axios
                  .post(buildApi + "/product/getPayLink", {
                    subscriptionId: getQueryVariable("pid"),
                  })
                  .then(function (e) {
                    0 !== e.data.errorCode
                      ? alert(e.data.errorMsg)
                      : Paddle.Checkout.open({
                          override: e.data.data.paddleLink,
                        });
                  })
                  .catch(function (e) {
                    console.log(e);
                  }),
                function () {
                  loading.classList.add("hidden");
                }
              ))
            : e.data.data.isNewUser
            ? window.open(panelUrl + "?token=" + t + "&key=cocosign")
            : (loginPopu.classList.remove("hidden"),
              (loginPopu.querySelector(".info span").innerText =
                e.data.data.email),
              loginPopu
                .querySelector(".check-btn")
                .setAttribute("href", "mailto:" + e.data.data.email),
              loginSendBtn.setAttribute("href", panelUrl)));
    })
    .catch(function (e) {
      console.log(e);
    });
  complete(o, function () {
    loading.classList.add("hidden");
  });
}
function startApp() {
  gapi.load("auth2", function () {
    auth2 = gapi.auth2.init({
      client_id:
        "536153840831-7bt42utu1edo9efsguvomubof7b74t8u.apps.googleusercontent.com",
      cookiepolicy: "single_host_origin",
    });
    for (var e = 0; e < googleEle.length; e++) attachSignin(googleEle[e]);
  });
}
function attachSignin(e) {
  auth2.attachClickHandler(
    e,
    {},
    function (e) {
      var t = e.getAuthResponse().id_token;
      loading.classList.remove("hidden"),
        loginXhr(buildApi + "/user/google/login", {
          idToken: t,
          sourcePage: window.location.href,
        });
    },
    function (e) {
      alert(e.error), console.log(e);
    }
  );
}
function googleCredentialResponse(e) {
  loginXhr(buildApi + "/user/google/login", {
    idToken: e.credential,
    sourcePage: window.location.href,
  });
}
function validityFun(e, t, o, n, i) {
  var a = e.target,
    l = null,
    r = a.nextElementSibling;
  r && r.classList.contains("err-tip")
    ? (l = r).classList.contains("text-red") || l.classList.add("text-red")
    : (((l = document.createElement("div")).className = "err-tip text-red"),
      a.after(l)),
    a.validity.valid
      ? a.nextElementSibling.remove()
      : a.validity.valueMissing
      ? (l.innerText = t)
      : a.validity.typeMismatch
      ? (l.innerText = o)
      : a.validity.tooShort
      ? (l.innerText = n)
      : a.validity.patternMismatch && (l.innerText = i);
}
function complete(e, t) {
  e.then(t, t);
}
function throttle(i, a) {
  var l,
    r = 0;
  return function () {
    var e = this,
      t = arguments,
      o = a || 100,
      n = new Date().getTime();
    n - r <= o ||
      ((r = n),
      clearTimeout(l),
      (l = setTimeout(function () {
        (l = null), i.apply(e, t);
      }, o)));
  };
}
function debounce(n, i) {
  var a;
  return function () {
    var e = this,
      t = arguments,
      o = i || 250;
    clearTimeout(a),
      (a = setTimeout(function () {
        (a = null), n.apply(e, t);
      }, o));
  };
}
function setCookie(e, t, o) {
  var o = o || 1,
    n = new Date();
  n.setTime(n.getTime() + 24 * o * 60 * 60 * 1e3),
    (document.cookie =
      e +
      "=" +
      escape(t) +
      ";expires=" +
      n.toGMTString() +
      ";path=/;domain=cocosign.com");
}
function getCookie(e) {
  var t,
    o = new RegExp("(^| )" + e + "=([^;]*)(;|$)");
  return (t = document.cookie.match(o)) ? unescape(t[2]) : null;
}
function delCookie(e) {
  var t = new Date();
  t.setTime(t.getTime() - 1);
  var o = getCookie(e);
  null != o &&
    (document.cookie =
      e +
      "=" +
      o +
      ";expires=" +
      t.toGMTString() +
      ";path=/;domain=cocosign.com");
}
function getQueryVariable(e) {
  for (
    var t = window.location.search.substring(1).split("&"), o = 0;
    o < t.length;
    o++
  ) {
    var n = t[o].split("=");
    if (n[0] == e) return n[1];
  }
  return !1;
}
function msag(e) {
  if (e && e.response)
    switch (e.response.status) {
      case 400:
        alert("Bad request!");
        break;
      case 401:
        alert("Unauthorized: Please log in!");
        break;
      case 403:
        alert("Access Denied!");
        break;
      case 404:
        alert("Bad Address!");
        break;
      case 408:
        alert("Request Timeout!");
        break;
      case 500:
        alert("Internal Server Error!");
        break;
      case 501:
        alert("Not yet implemented!");
        break;
      case 502:
        alert("Bad Gateway!");
        break;
      case 503:
        alert("Service Unavailable!");
        break;
      case 504:
        alert("Gateway Timeout!");
        break;
      case 505:
        alert("HTTP Version Not Supported!");
    }
}
window.BASE_URL && (buildApi = window.BASE_URL),
  window.MAIN_DOMAIN && (buildMainDomain = window.MAIN_DOMAIN),
  window.APP_DOMAIN && (buildAppDomain = window.APP_DOMAIN),
  defaultFun(buildMainDomain);
