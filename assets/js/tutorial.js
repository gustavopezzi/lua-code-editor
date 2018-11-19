var dialogCount = 0;
var dialogStarted = false;

$(document).ready(function () {
    $('#character').click(function() {
        if (dialogStarted) {
            return;
        }
        else {
            dialogStarted = true;
            $("#dialog-bubble").html(
                "<div style='min-width:200px; text-align:center;'>" +
                    "<img width='28' src='" + BASE_URL + "images/loading.gif'/>" +
                "</div>"
            );
        }
        var dialogAudio = new Audio(BASE_URL + "/files/" + page_id + "/" + page_id + ".ogg");
        dialogAudio.onloadeddata = function () {
            $("#tutorial-dialog-audio").get(0).play();
            var dialogTimer = setTimeout(function tick() {
                if (dialogCount < dialogList.length) {
                    var nextTimerMillis = dialogList[dialogCount].duration;
                    $("#dialog-bubble").html(dialogList[dialogCount].content);
                    if (dialogCount + 1 > dialogList.length) {
                        dialogCount = 0;
                    } else {
                        dialogCount++;
                    }
                } else {
                    return setTimeout(onDialogComplete, 0);
                }
                dialogTimer = setTimeout(tick, nextTimerMillis);
            }, 0);
        }
    });

    function onDialogComplete() {
        window.location.href = page_id == "levelquiz" ? page_next : BASE_URL + page_next;
    }
});
