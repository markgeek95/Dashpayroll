            function process()
            {
             var x =document.getElementById("price").value;
             var y =document.getElementById("qty").value;

             if(isNaN(x))
             {
              alert("please input numberic Price");
              document.getElementById("price").value="";
            }
            else if(isNaN(y))
            {
              alert("please input numberic quantity");
              document.getElementById("qty").value="";
            }
          }
          