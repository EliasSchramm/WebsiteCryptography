var form1_bsp2 = document.getElementById('form1_bsp2')
var form2_bsp2 = document.getElementById('form2_bsp2')
var out3 = document.getElementById('out3')
var out4 = document.getElementById('out4')
var f3_t1 = document.getElementById('f3_t1')
var f3_i1 = document.getElementById('f3_i1')
var f4_t1 = document.getElementById('f4_t1')
var f4_i1 = document.getElementById('f4_i1')

function cleanUp(arr) {

  let tmp_array = [];
  let stringStarted = false;

  arr.forEach((item, i) => {
    if(item != " "|| stringStarted){
      tmp_array.push(item)
      stringStarted = true;
    }

  });

  return tmp_array;
}

function decode_simple_2(original, key){
  var str = "";
  let org_array = original.split('')
  org_array = cleanUp(org_array)
  let block = false;
  key = parseInt(key)
  let iter = 0;

  org_array.forEach((item, i) => {
    var char = item;
    var index
    block = false;
    ASCII.forEach((jtem, j) => {
      if(char == jtem && !block){
        index = j - key - iter;
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
    iter += 1;
  });
  return convert(str);
}

function encode_simple_2(original, key) {
  let str = "";
  let org_array = original.split('')
  let block = false;
  key = parseInt(key)
  let iter = 0;

  org_array.forEach((item, i) => {
    var char = item;
    var index
    block = false;
    ASCII.forEach((jtem, j) => {
      if(char == jtem && !block){
        index = j + key + iter;
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
    iter += 1;
  });

  return convert(str);
}

form1_bsp2.onsubmit = function(){
   out3.innerHTML = encode_simple_2(f3_t1.value, f3_i1.value);
   return false;
}

form2_bsp2.onsubmit = function() {
  out4.innerHTML = decode_simple_2(f4_t1.value, f4_i1.value);
  return false;
}
