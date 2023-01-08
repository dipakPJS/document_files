 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product add page</title>
     <link rel="stylesheet" href="style.css">
     <style>
         * {
             margin: 0;
             padding: 0;
             box-sizing: border-box
         }

         form {
             width: 80%;
             margin: auto
         }

         .header {
             height: 50px;
             width: 100%;
             display: flex;
             justify-content: space-between;
             border-bottom: 2px solid gray;
             align-items: center;
             margin-bottom: 50px;
             margin-top: 20px;
             padding-bottom: 20px;
         }

         #btn-save {
             background-color: #1B9CFC !important;
             outline: none !important;
             padding: 10px 50px !important;
             border: none;
             color: white;
             font-size: 20px;
             font-weight: 900;
             text-transform: uppercase !important;
             border-radius: 10px !important;
             font-family: 'Lucida Sans', sans-serif;
             margin-right: 30px !important;
             cursor: pointer
         }

         #btn-cancel {
             background-color: #596275;
             text-decoration: none;
             color: white;
             font-size: 20px;
             font-weight: 900;
             padding: 10px 50px !important;
             text-transform: uppercase;
             border-radius: 10px !important;
             font-family: 'Lucida Sans', sans-serif;
             cursor: pointer
         }

         form label {
             font-size: 25px;
             font-weight: 900
         }

         form input {
             height: 40px;
             width: 300px;
             font-size: 18px
         }

         #sku input {
             margin-left: 60px
         }

         #name input {
             margin-left: 48px
         }

         #price input {
             margin-left: 20px
         }

         #size input {
             margin-left: 10px
         }

         #height input {
             margin-left: 40px
         }

         #width input {
             margin-left: 45px
         }

         #length input {
             margin-left: 36px
         }

         .opt-group {
             position: relative;
             width: 100%
         }

         .opt-group label {
             margin-top: 30px;
             position: absolute
         }

         #product-type {
             height: 50px;
             width: 200px;
             font-size: 20px;
             font-weight: 900;
             margin-left: 50px
         }

         h3 {
             font-size: 25px;
             font-weight: 900
         }

         footer {
             width: 80%;
             border-top: 2px solid black;
             height: 50px;
             display: flex;
             justify-content: center;
             align-items: center;
             margin: auto;
             margin-top: 220px;
             font-family: 'Lucida Sans', sans-serif;
         }
     </style>
 </head>

 <body>
     <form id="form" action="index.php" method="POST">

         <div class="header">
             <h1>Product Add</h1>
             <div class="submit">
                 <button type="submit" name="save" id="btn-save">Save</button>
                 <a href="index.php" id="btn-cancel">Cancel</a>
             </div>
         </div>
         <label for="sku">SKU: <input type="text" name="sku" id="sku" required>  
        </label>
        <span id = "availability"></span>
         <br><br>
         <label id="name">Name: <input type="text" name="name" required></label>
         <br><br>
         <label id="price">Price ($): <input type="number" name="price" required></label>
         <br><br>
         <table width="20%">
             <tr>
                 <td>
                     <h3>Type Selector:</h3>
                 <td>
                 <td>
                     <select name="product_type" id="product-type" onchange="productSelect()">
                         <option value="type" disabled selected>Type Selector</option>
                         <option id="dvd" value="dvd-disc">DVD-disc</option>
                         <option id="book" value="book">Book</option>
                         <option id="furniture" value="furniture">Furniture</option>
                     </select>
                 </td>
             </tr>
         </table>

         <div class="opt-group">
             <label id="size">Size (MB): <input type="number" name="size">
                 <br><br><br>
                 <h3>Please, enter the size in MB</h3>
             </label>

             <label id="weight">Weight (KG): <input type="number" name="weight" ><br><br><br>
                 <h3>Please, enter the weight in KG</h3>
             </label>

             <label id="height">Height: <input type="number" name="height"><br><br><br>

             </label>
             <br><br><br><br>
             <label id="width">Width: <input type="number" name="width"><br><br><br>

             </label>
             <br><br><br><br>
             <label id="length">Length: <input type="number" name="length" ><br><br><br>
                 <h3>Please, enter the required Height, Width, and Length of furniture</h3>
             </label>
         </div>
     </form>


    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
 
 </body>

 </html>