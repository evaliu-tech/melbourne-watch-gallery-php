function getShoppingCart(){
  // Get the current shopping list from local storage
  let shopping_cart = JSON.parse(localStorage.getItem("shopping_cart"));
  if(shopping_cart === null) shopping_cart = [];
  return shopping_cart;
}

function saveShoppingCart(shopping_cart){
  // Save the shopping list into local storage
  localStorage.setItem("shopping_cart",JSON.stringify(shopping_cart));
}

function add_item(ele){
  // 1. Get the product name, image url and price
  let price = ele.parentElement.querySelector("span").innerHTML;
  let name = ele.parentElement.parentElement.querySelector("h2").innerHTML;
  let image = ele.parentElement.parentElement.querySelector("img").src;

  // 2. Get the current shopping list from local storage
  let shopping_cart = getShoppingCart();

  // 3. Append the new item into the current shopping list
  let product = {price:price,name:name,image:image};
  shopping_cart.push(product);

  // 4. Save the shopping list into local storage
  saveShoppingCart(shopping_cart);

  // 5. Display shopping cart
  display_shoppingcart();
}

function add_item2(ele){
  // 1. Get the product name, first image url and price
  let price = ele.parentElement.querySelector("span").innerHTML;
  let name = ele.parentElement.querySelector("h2").innerHTML;
  let image = ele.parentElement.parentElement.querySelector(".thumbnail_images img").src;

  // 2. Get the current shopping list from local storage
  let shopping_cart = getShoppingCart();

  // 3. Append the new item into the current shopping list
  let product = {price:price,name:name,image:image};
  shopping_cart.push(product);

  // 4. Save the shopping list into local storage
  saveShoppingCart(shopping_cart);

  // 5. Display shopping cart
  display_shoppingcart();
}

function display_shoppingcart(){
  // Get the current shopping list from local storage
  let shopping_cart = getShoppingCart();

  // Display products and calculate total price
  let content = "";
  let total = 0;

  shopping_cart.forEach((product,index) => {
    content += `
      <div class="cart_item">
        <img src="${product.image}" alt="cart item image" />
        <h2>${product.name}</h2>
        <h2>$${product.price}</h2>
        <button onclick="remove_item(${index})" class="btn btn-secondary">Remove</button>
      </div>
    `;
    total += parseInt(product.price);
  });

  // Update shopping cart content
  document.getElementById("shopping_container").innerHTML = content;
  document.getElementById("total").innerHTML = "$" + total;
  document.getElementById("item_count").innerHTML = shopping_cart.length;
}

function remove_item(index){
  // Get the current shopping list from local storage
  let shopping_cart = getShoppingCart();

  // Remove product from shopping cart
  shopping_cart.splice(index,1);

  // Save the shopping list into local storage
  saveShoppingCart(shopping_cart);

  // Display shopping cart
  display_shoppingcart();
}

function change_image(ele){
  // Change the main product image
  document.querySelector(".main_image").src = ele.src;
}