"use strict";
function Sa() {
  this.init(), (this.commonEventProps = { pathname: window.location.pathname });
}
function mergeObjects() {
  for (var e = {}, t = 0; t < arguments.length; t += 1)
    for (var n = arguments[t], r = Object.keys(n), i = 0; i < r.length; i += 1)
      e[r[i]] = n[r[i]];
  return e;
}
function ready(e) {
  /complete|loaded|interactive/.test(document.readyState)
    ? e()
    : document.addEventListener(
        "DOMContentLoaded",
        function () {
          e();
        },
        !1
      );
}
!(function (e, t) {
  var n = e.amplitude || { _q: [], _iq: {} },
    r = t.createElement("script");
  (r.type = "text/javascript"),
    (r.integrity =
      "sha384-girahbTbYZ9tT03PWWj0mEVgyxtZoyDF9KVZdL+R53PP5wCY0PiVUKq0jeRlMx9M"),
    (r.crossOrigin = "anonymous"),
    (r.async = !0),
    (r.src = "https://cdn.amplitude.com/libs/amplitude-7.2.1-min.gz.js"),
    (r.onload = function () {
      e.amplitude.runQueuedFunctions ||
        console.log("[Amplitude] Error: could not load SDK");
    });
  var i = t.getElementsByTagName("script")[0];
  function o(e, t) {
    e.prototype[t] = function () {
      return (
        this._q.push([t].concat(Array.prototype.slice.call(arguments, 0))), this
      );
    };
  }
  i.parentNode.insertBefore(r, i);
  for (
    var a = function () {
        return (this._q = []), this;
      },
      s = ["add", "append", "clearAll", "prepend", "set", "setOnce", "unset"],
      c = 0;
    c < s.length;
    c++
  )
    o(a, s[c]);
  n.Identify = a;
  for (
    var u = function () {
        return (this._q = []), this;
      },
      d = [
        "setProductId",
        "setQuantity",
        "setPrice",
        "setRevenueType",
        "setEventProperties",
      ],
      l = 0;
    l < d.length;
    l++
  )
    o(u, d[l]);
  n.Revenue = u;
  var p = [
    "init",
    "logEvent",
    "logRevenue",
    "setUserId",
    "setUserProperties",
    "setOptOut",
    "setVersionName",
    "setDomain",
    "setDeviceId",
    "enableTracking",
    "setGlobalUserProperties",
    "identify",
    "clearUserProperties",
    "setGroup",
    "logRevenueV2",
    "regenerateDeviceId",
    "groupIdentify",
    "onInit",
    "logEventWithTimestamp",
    "logEventWithGroups",
    "setSessionId",
    "resetSessionId",
  ];
  function g(t) {
    for (var e = 0; e < p.length; e++)
      !(function (e) {
        t[e] = function () {
          t._q.push([e].concat(Array.prototype.slice.call(arguments, 0)));
        };
      })(p[e]);
  }
  g(n),
    (n.getInstance = function (e) {
      return (
        (e = (e && 0 !== e.length ? e : "$default_instance").toLowerCase()),
        n._iq.hasOwnProperty(e) || ((n._iq[e] = { _q: [] }), g(n._iq[e])),
        n._iq[e]
      );
    }),
    (e.amplitude = n);
})(window, document),
  (Sa.prototype.getInstance = function () {
    return amplitude.getInstance();
  }),
  (Sa.prototype.init = function () {
    this.getInstance().init("254fabfcbb09c30d883a99059398d80d", void 0, {
      includeGclid: !0,
      includeReferrer: !0,
      includeUtm: !0,
    });
  }),
  (Sa.prototype.setUserProperties = function (e) {
    this.getInstance().setUserProperties(e);
  }),
  (Sa.prototype.Login = function (e, t) {
    this.getInstance().setUserId(e), t && this.setUserProperties(t);
  }),
  (Sa.prototype.Track = function (e, t) {
    var n = mergeObjects(this.commonEventProps, t || {});
    this.getInstance().logEvent("[Web]" + e, n);
  }),
  (window.sa = new Sa()),
  ready(function () {
    var e = document.querySelectorAll("[data-event]");
    [].forEach.call(e, function (n) {
      var e,
        r = n.getAttribute("data-event");
      r &&
        ((e = n.getAttribute("data-event-trigger") || "click"),
        n.addEventListener(e, function () {
          var e = n.getAttribute("data-event-props") || "{}",
            t = mergeObjects(JSON.parse(e), {
              block: n.getAttribute("data-event-block") || "",
              text: n.hasAttribute("data-event-text")
                ? n.getAttribute("data-event-text") || n.innerText
                : "",
            });
          sa.Track(r, t);
        }));
    });
  });
