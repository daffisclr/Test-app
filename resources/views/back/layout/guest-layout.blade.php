<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>@yield('pageTitle')</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/back/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/back/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/back/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="/back/vendors/styles/icon-font.min.css" />
    <link href=" https://cdn.jsdelivr.net/npm/jquery.steps@1.1.4/dist/jquery-steps.min.css " rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/back/src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css"
        integrity="sha512-CbQfNVBSMAYmnzP3IC+mZZmYMP2HUnVkV4+PwuhpiMUmITtSpS7Prr3fNncV1RBOnWxzz4pYQ5EAGG4ck46Oig=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
        integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/redmond/jquery-ui.min.css"
        integrity="sha512-pL3uvb0iajriFzWcsjvmztg0ViN8MGpl4ajmiCb+xC5vnLUES2mkdp+7YAUjlcK/T+htiZH9HNkxAO+P3TbUmA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timedropper/1.0/timedropper.min.css"
        integrity="sha512-1KbjVCVdPEzoZExDz/KxcMilV3CXs+UXM62FQzy+3Pp9lmqfOmGkaJQg49XK/Y6sLFvZFb/BinT7hI/+0oEVig=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timedropper/1.0/timedropper.css"
        integrity="sha512-XXfcrEwC7/grycfCLD/qlGv9N/dNUdWxArzod7WMj2kdptI509I2qfOExEBn02WJxiO/GCH/wqLLwR9XgIcBFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="/back/src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css" />

    <!-- switchery css -->
    <link rel="stylesheet" type="text/css" href="/back/src/plugins/switchery/switchery.min.css" />

    <!-- bootstrap-tagsinput css -->
    <link rel="stylesheet" type="text/css" href="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" />

    <!-- bootstrap-touchspin css -->
    <link rel="stylesheet" type="text/css"
        href="/back/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="/extra-assets/ijabo/ijabo.min.css" />

    <!-- Script for span text -->
    <style type='text/css'>
        .h {
            font-weight: bold;
            vertical-align: top;
            color: red
        }

        .hl {
            font-size: 8px;
            font-weight: bold;
            vertical-align: top;
            color: red
        }

        .i {
            font-weight: bold;
            vertical-align: top;
        }

        .desc {
            display: none;
        }
    </style>

    @livewireStyles
    @stack('stylesheets')
</head>

<body>
    <div class="mobile-menu-overlay"></div>

    <div class="mx-3 px-5 pt-5 pb-3">
        <div class="min-height-200px">
            <div>
                @yield('content')
            </div>
        </div>

        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>

    <!-- js -->
    <script src="/back/vendors/scripts/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timedropper/1.0/timedropper.js"
        integrity="sha512-N3Ul7URkZRwfx6ukVg0/whKopCPvyvYF01WTMj+uqfXnNMDhLE8fS6viElgOrHjBbZJeUFd6YyEPWXdNh8nyUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timedropper/1.0/timedropper.min.js"
        integrity="sha512-f4mnC8WQRS2wA6YylLpyD99m/aw7/DZq6N4qQ12cu0wQQXWwrDU4afX3YUn/oGqDcgT1vkRu1XcidsV3LfqNNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="/back/vendors/scripts/script.min.js" defer></script>
    <script src="/back/vendors/scripts/process.js" defer></script>
    <script src="/back/vendors/scripts/layout-settings.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.4/dist/jquery-steps.min.js"
        integrity="sha256-R0TrxkJ4TSGpn3wTl2fajMlbx8pCYkJvzNYb4WitkFI=" crossorigin="anonymous" defer></script>
    <script src="/back/src/plugins/jquery-steps/jquery.steps.js" defer></script>

    <script src="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="/back/src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="/back/src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="/back/src/plugins/jquery-asColorPicker/jquery-asColorPicker.js"></script>
    <script src="/back/vendors/scripts/colorpicker.js"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script src="/extra-assets/ijabo/ijabo.min.js"></script>
    <script src="/extra-assets/ijabo/jquery-ijaboViewer.min.js"></script>
    <script>
        window.addEventListener('showToastr', function(event) {
            toastr.remove();
            if (event.detail.type === 'info') {
                toastr.info(event.detail.message);
            } else if (event.detail.type === 'success') {
                toastr.success(event.detail.message);
            } else if (event.detail.type === 'error') {
                toastr.error(event.detail.message);
            } else if (event.detail.type === 'warning') {
                toastr.warning(event.detail.message);
            } else {
                return false;
            }
        });
    </script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
