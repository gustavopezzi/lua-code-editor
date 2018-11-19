var dialogCount = 0;
var dialogStarted = false;

$(document).ready(function () {
    $('.dialog-click').click(function() {
        if (dialogStarted) {
            return;
        }
        else {
            dialogStarted = true;
            $(".dialog-click").hide();
            $(".audio-tip").hide();
            var dialogAudio = new Audio(BASE_URL + "/files/" + page_id + "/" + page_id + ".ogg");
            dialogAudio.onloadeddata = function () {
                $("#home-dialog-audio").get(0).play();
                $(".dialog-text").show();
                setTimeout(onDialogComplete, 29000);
            }
        }
    });

    function onDialogComplete() {
        $("#character").animate({ right: "-2000px" }, 700);
        $(".level-selector").animate({ opacity: 1 }, 1000);
    }
});
