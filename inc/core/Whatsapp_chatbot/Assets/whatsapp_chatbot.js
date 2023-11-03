"use strict";
function WhatsappChatbot() {
    var self = this;

    this.init = function () {
        self.action();
        self.import_chatbot();
    };

    this.action = function () {

    }

    this.closeImportModal = function () {
        $('#ImportChatbotModal').modal('hide');
    };

    this.import_chatbot = function () {
        if ($("#import_whatsapp_chatbot").length > 0) {
            var url = $("#import_whatsapp_chatbot").data("action");

            $(document).on('change', '#import_whatsapp_chatbot', function () {
                var form_data = new FormData();
                var totalfiles = document.getElementById('import_whatsapp_chatbot').files.length;
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('import_whatsapp_chatbot').files[index]);
                }

                Core.overplay();

                $(this).val('');
                $.ajax({
                    url: url,
                    type: 'post',
                    data: form_data,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                            }
                        }, false);
                        xhr.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                            }
                        }, false);
                        return xhr;
                    },
                    success: function (result) {
                        Core.overplay(true);
                        if (result.status == "success") {
                            window.location.reload();
                        } else {
                            Core.notify(result.message, result.status);
                        }
                    }
                });

                return false;
            });
        }
    };
}

var WhatsappChatbot = new WhatsappChatbot();
$(function () {
    WhatsappChatbot.init();
});