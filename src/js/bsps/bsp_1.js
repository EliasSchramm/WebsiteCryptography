var form1_bsp1 = document.getElementById('form1_bsp1')
var form2_bsp1 = document.getElementById('form2_bsp1')
var out1 = document.getElementById('out1')
var out2 = document.getElementById('out2')
var f1_t1 = document.getElementById('f1_t1')
var f1_i1 = document.getElementById('f1_i1')
var f2_t1 = document.getElementById('f2_t1')
var f2_i1 = document.getElementById('f2_i1')

var ASCII = []
for (var i = 32; i <= 127; i++) ASCII.push(String.fromCharCode(i));
ASCII.pop()

function decode_simple_1(original, key){
  var str = "";
  let org_array = original.split('')
  let block = false;
  key = parseInt(key)

  org_array.forEach((item, i) => {
    var char = item;
    var index
    block = false;
    ASCII.forEach((jtem, j) => {
      if(char == jtem && !block){
        index = j - key;
        while(!between(index, 0, ASCII.length-1)){
          if(index >= ASCII.length){
            index = index - ASCII.length
          }else if(index < 0){
            index = ASCII.length + index;
          }
        }
        char = ASCII[index]
        block = true;
      }
    });

    str += char;
  });
  return convert(str);
}

function encode_simple_1(original, key) {
  let str = "";
  let org_array = original.split('')
  let block = false;
  key = parseInt(key)

  org_array.forEach((item, i) => {
    var char = item;
    var index
    block = false;
    ASCII.forEach((jtem, j) => {
      if(char == jtem && !block){
        index = j + key;
        while(!between(index, 0, ASCII.length-1)){
          if(index >= ASCII.length){
            index = index - ASCII.length
          }else if(index < 0){
            index = ASCII.length + index;
          }
        }
        char = ASCII[index]
        block = true;
      }
    });

    str += char;
  });

  return convert(str);
}

form1_bsp1.onsubmit = function(){
   out1.innerHTML = encode_simple_1(f1_t1.value, f1_i1.value);
   return false;
}

form2_bsp1.onsubmit = function() {
  out2.innerHTML = decode_simple_1(f2_t1.value, f2_i1.value);
  return false;
}

console.log(ASCII.join(''));
console.log(ASCII);
