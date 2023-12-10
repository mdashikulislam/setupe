

// Cookie law banner
$('#cookie-banner-dismiss').on('click', function() {
    setCookie('cookie_law', 1, new Date().getTime() + (10 * 365 * 24 * 60 * 60 * 1000), '/');
    $('#cookie-banner').addClass('d-none');
});


// Dark mode
$('#dark-mode').click(function(e) {
    e.preventDefault();

    // Toggle dark mode class on the HTML element
    $('html').toggleClass('dark');

    // Update the sources
    $('[data-theme-target]').each(function() {
        var $element = $(this);
        var targetAttr = $element.data('theme-target');
        var themeLight = $element.data('theme-light');
        var themeDark = $element.data('theme-dark');
        var currentTheme = $('html').hasClass('dark') ? themeLight : themeDark;
        $element.attr(targetAttr, currentTheme);
    });

    // Update the text
    var $darkModeButton = $('#dark-mode');
    var textLight = $darkModeButton.find('span').data('text-light');
    var textDark = $darkModeButton.find('span').data('text-dark');
    var currentText = $('html').hasClass('dark') ? textLight : textDark;
    $darkModeButton.find('span').text(currentText);

    // Update the dark mode cookie
    var darkModeValue = $('html').hasClass('dark') ? 0 : 1;
    setCookie('dark_mode', darkModeValue, new Date().getTime() + (10 * 365 * 24 * 60 * 60 * 1000), '/');
});

// Pricing plans
$('#plan-month').click(function() {
    $('.plan-month').addClass('d-block');
    $('.plan-year').removeClass('d-block');
});

$('#plan-year').click(function() {
    $('.plan-year').addClass('d-block');
    $('.plan-month').removeClass('d-block plan-preload');
});
let updateSummary = (type) => {
    if (type == 'month') {
        $('.checkout-month').addClass('d-inline-block');
        $('.checkout-year').removeClass('d-inline-block');
    } else {
        $('.checkout-month').removeClass('d-inline-block');
        $('.checkout-year').addClass('d-inline-block');
    }
};

let updateBillingType = (value) => {
    // Show the offline instructions
    if (value == 'bank') {
        $('#bank-instructions').removeClass('d-none').addClass('d-block');
    }
    // Hide the offline instructions
    else {
        if ($('#bank-instructions')) {
            $('#bank-instructions').addClass('d-none').removeClass('d-block');
        }
    }

    if (value == 'cryptocom' || value == 'coinbase' || value == 'bank') {
        $('.checkout-subscription').removeClass('d-block').addClass('d-none');
        $('.checkout-one-time').addClass('d-block').removeClass('d-none');
    } else {
        $('.checkout-subscription').removeClass('d-none').addClass('d-block');
        $('.checkout-one-time').addClass('d-none').removeClass('d-block');
    }
};
console.log('loaded-2')
// Payment form
if (document.querySelector('#form-payment')) {
    let url = new URL(window.location.href);

    // Loop through all elements with the name "interval"
    $('[name="interval"]').each(function() {
        var element = $(this);

        // Check if the element is checked initially
        if (element.prop('checked')) {
            updateSummary(element.val());
        }

        // Listen to interval changes
        element.on('change', function() {
            // Update the URL address
            url.searchParams.set('interval', element.val());

            history.pushState(null, null, url.href);

            updateSummary(element.val());
        });
    });


    // Loop through all elements with the name "payment_processor"
    $('[name="payment_processor"]').each(function() {
        var element = $(this);

        // Check if the element is checked initially
        if (element.prop('checked')) {
            updateBillingType(element.val());
        }

        // Listen to payment processor changes
        element.on('change', function() {
            // Update the URL address
            url.searchParams.set('payment', element.val());

            history.pushState(null, null, url.href);

            updateBillingType(element.val());
        });
    });


    // If the Add a coupon button is clicked
    $('#coupon').click(function (e) {
        e.preventDefault();

        // Hide the link
        $(this).addClass('d-none');

        // Show the coupon input
        $('#coupon-input').removeClass('d-none');

        // Enable the coupon input
        $('input[name="coupon"]').removeAttr('disabled');
    });


    // If the Cancel coupon button is clicked
    $('#coupon-cancel').click(function (e) {
        e.preventDefault();

        $('#coupon').removeClass('d-none');

        // Hide the coupon input
        $('#coupon-input').addClass('d-none');

        // Disable the coupon input
        $('input[name="coupon"]').attr('disabled', 'disabled');
    });

// If the country value changes
    $('#i-country').change(function () {
        // Remove the submit button
        $('#form-payment').find('[type="submit"]').remove();

        // Submit the form
        $('#form-payment').submit();
    });

}

// Coupon form
if ($('#form-coupon').length) {
    $('#i-type').change(function () {
        if ($('#i-type').val() == 1) {
            $('#form-group-redeemable').removeClass('d-none');
            $('#form-group-discount').addClass('d-none');
            $('#i-percentage').attr('disabled', 'disabled');
        } else {
            $('#form-group-redeemable').addClass('d-none');
            $('#form-group-discount').removeClass('d-none');
            $('#i-percentage').removeAttr('disabled');
        }
    });
}


// Table filters
$('#search-filters').click(function (e) {
    e.stopPropagation();
});


// Clipboard
new ClipboardJS('[data-clipboard="true"]');
$('[data-clipboard-copy]').click(function (e) {
    e.preventDefault();
    try {
        var value = $(this).data('clipboard-copy');
        var tempInput = $('<input>');

        $('body').append(tempInput);

        // Set the input's value to the url to be copied
        tempInput.val(value);

        // Select the input's value to be copied
        tempInput.select();

        // Copy the url
        document.execCommand('copy');

        // Remove the temporary input
        tempInput.remove();
    } catch (e) {}
});


// Tooltip
// jQuery('[data-tooltip="true"]').tooltip({animation: true, trigger: 'hover', boundary: 'window'});

// Copy tooltip
// jQuery('[data-tooltip-copy="true"]').tooltip({animation: true});

// $('[data-tooltip-copy="true"]').click(function (e) {
//     // Update the tooltip
//     console.log('as')
//      $(this).tooltip('hide').attr('data-bs-original-title', $(this).data('text-copied')).tooltip('show');
// });

$('[data-tooltip-copy="true"]').mouseleave(function () {
    $(this).attr('data-bs-original-title', $(this).data('text-copy'));
});


// Slide menu
$('.slide-menu-toggle').click(function () {
    $('#slide-menu').toggleClass('active');
});


// Toggle password visibility
$('[data-password]').click(function (e) {
    var passwordInput = $('#' + $(this).data('password'));

    if (passwordInput.attr('type') === 'password') {
        passwordInput.attr('type', 'text');
        // $(this).tooltip('hide').attr('data-original-title', $(this).data('passwordHide')).tooltip('show');
    } else {
        passwordInput.attr('type', 'password');
        // $(this).tooltip('hide').attr('data-original-title', $(this).data('passwordShow')).tooltip('show');
    }
});


/**
 * Handle the confirmation modal event.
 *
 * @param element
 */
function confirmationModalEvent(element) {
    $(element).click(function () {
        // Unset attributes if previously set
        $('#modal-button').removeAttr('name');
        $('#modal-button').removeAttr('value');

        // Set the attributes
        if ($(this).data('buttonName')) {
            $('#modal-button').attr('name', $(this).data('buttonName'));
        }
        if ($(this).data('buttonValue')) {
            $('#modal-button').attr('value', $(this).data('buttonValue'));
        }
        $('#modal-label').text($(this).data('title'));
        $('#modal-button').text($(this).data('title'));
        $('#modal-button').attr('class', $(this).data('button'));
        $('#modal-text').text($(this).data('text'));
        $('#modal-sub-text').text($(this).data('subText'));
        $('#modal form').attr('action', $(this).data('action'));
    });
}

$('[data-target="#modal"]').each(function () {
    confirmationModalEvent(this);
});

// Button loader
$('[data-button-loader]').click(function (e) {
    // Stop the button from being re-submitted while loading
    if ($(this).hasClass('disabled')) {
        e.preventDefault();
    }
    $(this).addClass('disabled');
    $(this).find('.spinner-border').removeClass('d-none');
    $(this).find('.spinner-text').addClass('invisible');
});


/**
 * Restore a disabled button.
 */
function restoreDisabledButton(element) {
    $(element).removeClass('disabled');
    $(element).find('.spinner-border').addClass('d-none');
    $(element).find('.spinner-text').removeClass('invisible');
}


// AI form
if ($('#ai-form').length) {
    // If the show AI form button is present
    $('#ai-form-show-button').on('click', function () {
        // Hide the show AI form button
        $('#ai-form-show-button').addClass('d-none');

        // Show the AI form
        $('#ai-form').removeClass('d-none');

        /*autoResizeTextarea();*/
    });

    $('[data-button-loader]').on('click', function () {
        // If any results are present, hide them
        $('#ai-results').addClass('d-none');

        // Show the placeholder container
        $('#ai-placeholder-results').removeClass('d-none');
        $('#ai-placeholder-results').addClass('d-flex');

        // Hide the default placeholder text
        $('#ai-placeholder-text-start').addClass('d-none');

        // Show the in-progress placeholder text
        $('#ai-placeholder-text-progress').removeClass('d-none');
        $('#ai-placeholder-text-progress').addClass('d-flex');
    });
}

// Templates filters
$(document).ready(function () {
    if ($('#template-filters').length) {
        let filterTemplates = (search, category) => {
            let hideCategoryLabels = () => {
                $('[data-category-label]').addClass('d-none');
            }

            let hideTemplates = () => {
                $('[data-templatex]').addClass('d-none');
            }

            let showCategoryLabels = () => {
                $('[data-category-label]').removeClass('d-none');
            }

            let showTemplates = () => {
                $('[data-templatex]').removeClass('d-none');
            }

            let showCategoryLabel = (name) => {
                $('[data-category-label="' + name + '"]').removeClass('d-none');
            }

            let showTemplate = (name) => {
                $('[data-templatex="' + name + '"]').removeClass('d-none');
            }

            let templates = category ? $('[data-template-category="' + category + '"]') : $('[data-templatex]');

            if (!search && !category) {
                showCategoryLabels();
                showTemplates();
            } else {
                hideCategoryLabels();
                hideTemplates();

                templates.each(function () {
                    if (search) {
                        if ($(this).data('templatex').toLowerCase().includes(search.toLowerCase())) {
                            showTemplate($(this).data('templatex'));
                            showCategoryLabel($(this).data('template-category'));
                        }
                    } else {
                        showTemplate($(this).data('templatex'));
                        showCategoryLabel($(this).data('template-category'));
                    }
                });
            }
        }

        $('[data-filter-category]').on('click', function (e) {
            e.preventDefault();

            // Remove the previous active button state and category
            $('[data-filter-category]').each(function () {
                $(this).removeClass($(this).data('text-color-active') + ' ' + $(this).data('text-color-inactive'))
                    .addClass($(this).data('text-color-inactive'))
                    .removeAttr('data-filter-category-active')
                    .attr('href', '#');
            });

            // Set the active button state and category
            $(this).removeClass($(this).data('text-color-inactive'))
                .addClass($(this).data('text-color-active'))
                .attr('data-filter-category-active', $(this).data('filter-category'))
                .removeAttr('href');

            // Call the filterTemplates function with the appropriate parameters
            filterTemplates($('#i-search').val(), $('[data-filter-category-active]').data('filter-category-active'));
        });

        if ($('#form-templates-search').length) {
            $('#i-search').on('keyup', function () {
                // If the search input has any value
                if ($('#i-search').val().length > 0) {
                    filterTemplates($('#i-search').val(), $('[data-filter-category-active]').data('filter-category-active'));

                    // Show the clear button
                    $('#clear-button-container').removeClass('d-none');
                    $('#i-search').after($('#clear-button-container'));
                } else {
                    filterTemplates('', $('[data-filter-category-active]').data('filter-category-active'));

                    // Hide the clear button
                    $('#form-templates-search').append($('#clear-button-container'));
                    $('#clear-button-container').addClass('d-none');
                }
            });

            $('#b-clear').on('click', function () {
                // Empty the search input
                $('#i-search').val('');

                // Focus the search input
                $('#i-search').focus();

                // Move the clear button outside the search input container
                $('#form-templates-search').append($('#clear-button-container'));

                // Hide the clear button
                $('#clear-button-container').addClass('d-none');

                // Show the filtered items
                filterTemplates('', $('[data-filter-category-active]').data('filter-category-active'));
            });
        }
    }
});


// Auto resize textarea
let autoResizeTextarea = () => {
    $('[data-auto-resize-textarea]').each(function () {
        $(this).css('box-sizing', 'border-box');
        let offset = this.offsetHeight - this.clientHeight;

        // Resize the textarea
        $(this).on('input', function (event) {
            $(event.target).css('height', 'auto');
            $(event.target).css('height', event.target.scrollHeight + offset + 'px');
        });

        // Size the textarea
        $(this).css('height', this.scrollHeight + offset + 'px');

        $(this).removeAttr('data-autoresize');
    });
};


autoResizeTextarea();

/**
 * Load the editor.
 */
let loadEditor = () => {
    // Get all the text editors
    $('[data-text-editor]').each(function () {
        let id = $(this).data('text-editor');
        let readOnly = $(this).data('text-editor-readonly') === 'true';

        let container = $('#result-' + id)[0]; // Use [0] to access the DOM element
        let options = {
            modules: {
                toolbar: '#toolbar-' + id
            },
            theme: 'snow',
            readOnly: readOnly,
        };

        let editor = new Quill(container, options);

        editor.on('text-change', function () {
            $('#i-result-' + id).val(editor.root.innerHTML.trim());
        });
    });
};


loadEditor();

if ($('#form-chat').length) {
    /**
     * Scroll the chat window to the end of the conversation.
     */
    let scrollChatWindowToEnd = () => {
        $('#chat-container').scrollTop($('#chat-container')[0].scrollHeight);
    }

    /**
     * Focus the chat message input.
     */
    let focusChatMessageInput = () => {
        $('#i-message').focus();
    }

    /**
     * Clear the chat message input.
     */
    let clearChatMessageInput = () => {
        $('#i-message').val('');
        $('#i-message').removeAttr('style');
    }

    /**
     * Disable the chat message input.
     */
    let disableChatMessageInput = () => {
        $('#i-message').attr('disabled', 'disabled');
    }

    /**
     * Enable the chat message input.
     */
    let enableChatMessageInput = () => {
        $('#i-message').removeAttr('disabled');
    }

    /**
     * Add the chat message input error.
     * @param message
     */
    let addChatMessageInputError = (message) => {
        $('#i-message').addClass('is-invalid');
        $('.invalid-feedback strong').text(message);
    }

    /**
     * Clear the chat message input error.
     */
    let clearChatMessageInputError = () => {
        $('#i-message').removeClass('is-invalid');
    }

    /**
     * Restore a disabled button.
     */
    let restoreDisabledButton = (element) => {
        $(element).removeClass('disabled');
        $(element).find('.spinner-border').addClass('d-none');
        $(element).find('.spinner-text').removeClass('invisible');
    }

// Slight delay needed to prevent incomplete scrolling when elements are still being rendered
    setTimeout(function () {
        scrollChatWindowToEnd();
    }, 100);

    focusChatMessageInput();

    $('#i-message').on('keypress', function (e) {
        // If the user presses the Enter key without holding the Shift key
        if (e.which === 13 && !e.shiftKey) {
            e.preventDefault();
            $('#form-chat button[name="submit"]').click();
        }
    });

    $('#form-chat').on('submit', function (e) {
        e.preventDefault();
        chatMessage();
    });


    /**
     * Handle the AI Message.
     */
    let chatMessage = () => {
        clearChatMessageInputError();

        // If there's no chat message being sent
        if (!$('#i-message').val()) {
            focusChatMessageInput();
            restoreDisabledButton($('#form-chat button[type="submit"]'));

            return;
        }

        // Get the chat form
        const chatForm = new FormData($('#form-chat')[0]);

        disableChatMessageInput();

        chatForm.set('role', 'user');
        let userRequestPromise = fetch($('#form-chat').attr('action'), {
            method: 'post',
            headers: {
                "Accept": "application/json, text/javascript; charset=utf-8",
                "Content-Type": "application/json, text/javascript; charset=utf-8"
            },
            body: JSON.stringify(Object.fromEntries(chatForm))
        })
            .then(res => res.json())
            .then(response => {
                // If there are validation errors
                if (response.errors) {
                    addChatMessageInputError(response.errors.message[0]);

                    enableChatMessageInput();
                    restoreDisabledButton($('#form-chat button[type="submit"]'));

                    return false;
                }

                // Add the response to the chat messages list
                $('#chat-messages').append(response.message);

                scrollChatWindowToEnd();

                // Rebind the modal event
                $('#chat-messages a[data-toggle="modal"]').each(function (index, element) {
                    confirmationModalEvent(element);
                });

                chatForm.set('role', 'assistant');
                let assistantRequestPromise = fetch($('#form-chat').attr('action'), {
                    method: 'post',
                    headers: {
                        "Accept": "application/json, text/javascript; charset=utf-8",
                        "Content-Type": "application/json, text/javascript; charset=utf-8"
                    },
                    body: JSON.stringify(Object.fromEntries(chatForm))
                })
                    .then(res => res.json())
                    .then(response => {
                        // If there are validation errors
                        if (response.errors) {
                            addChatMessageInputError(response.errors.message[0]);

                            enableChatMessageInput();
                            restoreDisabledButton($('#form-chat button[type="submit"]'));

                            return false;
                        }

                        // Add the response to the chat messages list
                        $('#chat-messages').append(response.message);

                        scrollChatWindowToEnd();
                        focusChatMessageInput();
                        clearChatMessageInput();
                        enableChatMessageInput();
                        restoreDisabledButton($('#form-chat button[type="submit"]'));

                        // Rebind the modal event
                        $('#chat-messages a[data-toggle="modal"]').each(function (index, element) {
                            confirmationModalEvent(element);
                        });
                    })
                    .catch(err => {
                        console.log(err);

                        focusChatMessageInput();
                        clearChatMessageInput();
                        enableChatMessageInput();
                        restoreDisabledButton($('#form-chat button[type="submit"]'));
                    });
            })
            .catch(err => {
                console.log(err);

                focusChatMessageInput();
                clearChatMessageInput();
                enableChatMessageInput();
                restoreDisabledButton($('#form-chat button[type="submit"]'));
            });
    }

}

/**
 * Get the value of a given cookie.
 *
 * @param   name
 * @returns {*}
 */
let getCookie = (name) => {
    var name = name + '=';
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return '';
};


/**
 * Set a cookie.
 *
 * @param   name
 * @param   value
 * @param   expire
 * @param   path
 */
let setCookie = (name, value, expire, path) => {
    document.cookie = name + "=" + value + "; expires=" + (new Date(expire).toUTCString()) + "; path=" + path;
};
