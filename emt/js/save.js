function setAutoCompleteOFF(tm) {
    if (typeof tm == "undefined") {
        tm = 10;
    }
    try {
        var inputs = $(".auto-complete-off,input[autocomplete=off]");
        setTimeout(function () {
            inputs.each(function () {
                var old_value = $(this).attr("value");
                var thisobj = $(this);
                setTimeout(function () {
                    thisobj.removeClass("auto-complete-off").addClass("auto-complete-off-processed");
                    thisobj.val(old_value);
                }, tm);
            });
        }, tm);
    } catch (e) {}
}
$(function () {
    setAutoCompleteOFF();
})

// modified post-code from https://stackoverflow.com/questions/133925/javascript-post-request-like-a-form-submit
function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.

    var form = document.createElement("form");
    form.id = "dynamicform" + Math.random();
    form.setAttribute("method", method);
    form.setAttribute("action", path);
    form.setAttribute("style", "display: none");
    // Internet Explorer needs this
    form.setAttribute("onsubmit", "window.external.AutoCompleteSaveForm(document.getElementById('" + form.id + "'))");

    for (var key in params) {
        if (params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            // Internet Explorer needs a "password"-field to show the store-password-dialog
            hiddenField.setAttribute("type", key == "password" ? "password" : "text");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    var submitButton = document.createElement("input");
    submitButton.setAttribute("type", "submit");

    form.appendChild(submitButton);

    document.body.appendChild(form);

    //form.submit(); does not work on Internet Explorer
    submitButton.click(); // "click" on submit-button needed for Internet Explorer
}

function login(username, password, remember, redirectUrl) {
    // "account/login" sets a cookie if successful
    return $.postJSON("account/login", {
            username: username,
            password: password,
            remember: remember,
            returnUrl: redirectUrl
        })
        .done(function () {
            // login succeeded, issue a manual page-redirect to show the store-password-dialog
            post(
                redirectUrl, {
                    username: username,
                    password: password,
                    remember: remember,
                    returnUrl: redirectUrl
                },
                "post");
        })
        .fail(function () {
            // show error
        });
};
