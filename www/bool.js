/**
 * Created by onysko on 24.04.2015.
 */

/** JS SamsonCMS Select field interaction */
SamsonCMS_InputBool = function(fields)
{
    s('.__field_input_checkbox', fields).change(function(checkbox) {
        checkbox.val(checkbox.a('checked') ? 1 : 0);
    });

    // Create Select field instance with save handler
    SamsonCMS_InputText(fields);
};

// Bind input
SamsonCMS_Input.bind(SamsonCMS_InputBool, '.__inputfield.__bool');