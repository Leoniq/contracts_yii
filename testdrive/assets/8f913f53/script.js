var selectAll        = $("input:radio[name='SelectAllGroup']");
var checkRadio       = $(".form-check-input");
var checkRadioTarget = $("input:radio[class='form-check-input target'][id='checkDefault']");
var checkDefault     = $("checkRadioTarget[value='" + checkRadioTarget.val() + "']").prop("checked", true);
var countAllRadio    = $("input:radio[class='form-check-input target'][value='" + checkDefault.val() + "']");

// Radio buttons with the "id=checkDefault" attribute are selected by default
if (checkDefault.length === countAllRadio.length-1) {
    $("input:radio[name='SelectAllGroup'][value='" + checkDefault.val() + "']").prop("checked", true);
} else {
    checkRadioTarget.prop("checked", true);
}

// Radio buttons selection: active/inactive
$('.target').click(function() {
    var siblings = $("input:radio[name='" + this.value + "']");
    for (let i = 0; i < siblings.length; i++) {
        if (siblings[i] != this)
            siblings[i].oldChecked = false;
    }
    if (this.oldChecked)
        this.checked = false;
    this.oldChecked = this.checked;
});

// Select/deselect all radio buttons
selectAll.click(function() {
    var checkChild = $("input:radio[value='" + this.value + "']");
    if ($(this).is(':checked')) {
        checkRadio.each(function () {
            checkChild.prop("checked", true);
        });
    } else {
        checkRadio.each(function(){
            checkChild.prop("checked", false);
        });
    }
});

// Select/deselect if all/not all radio buttons are selected
checkRadio.click(function() {
    var selectAllAttr    = $("input:radio[name='SelectAllGroup'][value='" + this.value + "']");
    var RadioAttr        = $("input:radio[name|='groupOfMaterialRadios'][value='" + this.value + "']");
    var RadioAttrChecked = $("input:radio:checked[name|='groupOfMaterialRadios'][value='" + this.value + "']");
    if (RadioAttrChecked.length === RadioAttr.length)
    {
        selectAllAttr.prop("checked", true);
    } else {
        selectAll.removeAttr("checked");
    }
});