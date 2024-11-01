document.addEventListener('alpine:init', () => {
    Alpine.data('products', () => ({
        
    items: [
        {id: 1, name: 'Deluxe', img:'kost1a.jpeg',price:1500000},
        {id: 2, name: 'Premium', img:'kost2a.jpeg',price:1000000}, 
        {id: 3, name: 'Standart', img:'kost3a.jpeg',price:500000}
    ]
}));

Alpine.store('cart', {
    items: [],
    total: 0,
    quantity: 0,
    add(newItem){
      const cartitem = this.items.find((item) => item.id === newItem.id);

      if(!cartitem){
        this.items.push({ ...newItem, quantity: 1, total: newItem.price });
        this.quantity++;
        this.total += newItem.price;
      }else{
        this.items = this.items.map((item) => {
          if (item.id !== newItem.id){
            return item;
          }else{
            item.quantity++;
            item.total = item.price * item.quantity;  
            this.quantity++;
            this.total += item.price;
            return item;
          }
        })
      }

    },
    remove(id){
      const cartitem = this.items.find((item) => item.id === id);
     if(cartitem.quantity > 1){
      this.items = this.items.map((item) => {
        if(item.id !== id){
          return item;
        } else {
          item.quantity--;
          item.total = item.price * item.quantity;
          this.quantity--;
          this.total -= item.price;
          return item;

        }
      })
     } else if (cartitem.quantity === 1){
      this.items = this.items.filter((item) => item.id !== id);
      this.quantity--;
      this.total -= cartitem.price;
     }
    },
});

});



const checkoutButton = document.querySelector('.checkout-button');
checkoutButton.disabled = true;

const form = document.querySelector('#checkoutForm');

form.addEventListener('keyup',function(){
  for(let i = 0; i < form.elements.length; i++){
    if(form.elements[i].value.length !==0){
      checkoutButton.classList.remove('disabled');
      checkoutButton.classList.add('disabled');
    } else {
      return false;
    }
  }
  checkoutButton.disabled = false;
  checkoutButton.classList.remove('disabled');
});


checkoutButton.addEventListener('click', async function (e) {
  e.preventDefault();
  const formData = new FormData(form);
  const data = new URLSearchParams(formData);
  const objData = Object.fromEntries(data);
  // const message = formatMessage(objData);
  // window.open('http://wa.me/6289673647187?text=' + encodeURIComponent(message));
 

  try{
    const response = await fetch('placeOrder.php',{
      method: 'POST',
      body: data,
    });
    const token = await response.text();
    //  console.log(token);
   window.snap.pay(token);
  }catch (err){
    console.log(err.message);
  }

 
  


});


const formatMessage = (obj) => {
  return `Data Customer
  Nama: ${obj.name}
  Email: ${obj.email}
  No HP: ${obj.phone}
  Data Pesanan
  ${JSON.parse(obj.items).map((item) => `${item.name} (${item.quantity} x ${rupiah(item.total)}) \n` )}
  Total: ${rupiah(obj.total)}
  Teima Kasih`;
};


//konversi ke rupiah
const rupiah = (number) => {
    return new Intl.NumberFormat ('id-ID',{
        style: 'currency',
        currency: 'IDR',
        maximumFractionDigits: 0,
    }).format(number);
};


