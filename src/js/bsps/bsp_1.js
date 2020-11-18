var form1_bsp1 = document.getElementById('form1_bsp1')
var form2_bsp1 = document.getElementById('form2_bsp1')
var out1 = document.getElementById('out1')
var out2 = document.getElementById('out2')
var f1_t1 = document.getElementById('f1_t1')
var f2_i2 = document.getElementById('f1_i1')

var ASCII = []
var overflow_ASCII = []
for (var i = 32; i <= 127; i++) ASCII.push(String.fromCharCode(i));

overflow_ASCII += ASCII + ASCII + ASCII

function encode_simple_1(original, key) {
  let str = "";
  let org_array = original.split('')
  let block = false;
  key = parseInt(key)
  key = clamp(key, -ASCII.length, ASCII.length)

  org_array.forEach((item, i) => {
    let char = item;
    block = false;
    ASCII.forEach((jtem, j) => {
      if(char == jtem && !block){

// BUG: OVERFLOW

        let index = j + key;
        char = ASCII[index]
        block = true;
      }
    });

    str += char;
  });

  return str;
}

form1_bsp1.onsubmit = function(){
   out1.innerHTML = encode_simple_1(f1_t1.value, f1_i1.value);
   return false;
}
console.log(ASCII);
