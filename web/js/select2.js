$("#select").select2({
   // templateSelection: formatState
});

function updateVendorId(){
    $("#einkaufpurchase-verkaeufersnr_vendor_id").val($("#select").find(":selected")[0].dataset.id);
}
function updateCustomerId(){
    $("#verkaufsale-kaeufersnummer_customer_id").val($("#select").find(":selected")[0].dataset.id);
}

