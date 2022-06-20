var addItemId=0;
function addToCart(item){
   addItemId+=01;
   var selectedItem=document.createElement('div');
   selectedItem.classList.add('img');
   selectedItem.setAttribute(id,addItemId);
   var img =document.createElement('img');
   img.setAttribute('src',item.children[0].currentSrc);
   var delBtn= document.createElement('button');
   delBtn.innertext='delete';
   delBtn.setAttribute('onclick','del('+addItemId+')');
   var cartItems=document.getElementById('text');
   cartItems.append(selectedItem);
    cartItems.append(text);
    cartItems.append(img);
    cartItems.append(delBtn);
}

