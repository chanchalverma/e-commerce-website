$(document).ready(function() {
  product();
  cat();

  //product() is a funtion fetching product record from database whenever page is load
  function product() {
    $.ajax({
      url: "Alloption.php",
      method: "POST",
      data: { getAllproduct: 1 },
      success: function(data) {
        $("#get_product").html(data);
      }
    });
  }

  //cat() is a funtion fetching category record from database whenever page is load
  function cat() {
    $.ajax({
      url: "Alloption.php",
      method: "POST",
      data: { category: 1 },
      success: function(data) {
        $("#get_category").html(data);
      }
    });
  }

  $("body").delegate(".category", "click", function(event) {
    $("#get_product").html("<h3>Loading...</h3>");
    event.preventDefault();
    var types = $(this).attr("c_type1");

    $.ajax({
      url: "Alloption.php",
      method: "POST",
      data: { get_selected_Category: 1, type: types },
      success: function(data) {
        $("#get_product").html(data);
        if ($("body").width() < 480) {
          $("body").scrollTop(683);
        }
      }
    });
  });
});
