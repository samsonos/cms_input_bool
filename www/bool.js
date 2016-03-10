/**
 * Created by onysko on 24.04.2015.
 */

/** JS SamsonCMS Select field interaction */
SamsonCMS_InputBool = function(fields) {
    var loader = new Loader(fields, {type: 'absolute', top: 1, left: 1});

    s('.__field_input_checkbox', fields).change(function(checkbox) {
        var new_value = checkbox.a('checked') ? 1 : 0;
        checkbox.hide();

        // Create form for async post
        var form = s('<form method="post" enctype="multipart/form-data"></form>');

        // Set field action as form action
        form.a('action', s('input[name="__action"]', fields).val());

        // Add all field hidden fields to form
        s('input[type="hidden"]', fields).each(function(hidden) {
            form.append('<textarea name="'+hidden.a('name')+'">'+hidden.val()+'</textarea>');
        });

        // Add new field value
        form.append('<textarea name="__value">'+new_value+'</textarea>');

        loader.show();

        // Perform ajax save
        form.ajaxForm(function() {
            checkbox.show();
            loader.hide();

            // Toggle publish class in entity if this is publish switcher
            if (checkbox.parent().parent().hasClass('publish')) {
                checkbox.parent().parent().parent().toggleClass('not-published');
            }
        });
    });
};

// Bind input
SamsonCMS_Input.bind(SamsonCMS_InputBool, '.__inputfield.__bool');