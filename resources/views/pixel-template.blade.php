<script>
    (function() {
        var pixelId = '{{ $pixelId }}';
        var baseUrl = '{{ $baseUrl }}';

        function sendEvent(eventName, eventData) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", baseUrl + "/track", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.send(JSON.stringify({
                pixelId: pixelId,
                event: eventName,
                data: eventData
            }));
        }

        sendEvent("page_view", {
            url: window.location.href,
            referrer: document.referrer
        });

        window.trackEvent = sendEvent;
    })();
</script>
