


            $(document).ready(function() {
                $("#slide2").click(function(event) {
                    $(".art-section").load('./sections/art/index.html');
                    $(".art-section").css({"display": "block","height":"100%"});
                });
            });