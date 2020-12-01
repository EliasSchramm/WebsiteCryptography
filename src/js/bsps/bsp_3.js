var form1_bsp3 = document.getElementById('form1_bsp3')
var form2_bsp3 = document.getElementById('form2_bsp3')
var out5 = document.getElementById('out5')
var out6 = document.getElementById('out6')
var f5_t1 = document.getElementById('f5_t1')
var f5_t2 = document.getElementById('f5_t2')
var f6_t1 = document.getElementById('f6_t1')
var f6_t2 = document.getElementById('f6_t2')

function isNumeric(num){
  return !isNaN(num)
}



function encode_sha_1(original, key) {
  let str = "";
  let org_array = original.split('')
  let iter = 0;
  key += "il82Y7GlJSjeiVZSSgz9";
  let sha_key = SHA1(key);
  let sha_key_array = sha_key.split('');
  let offset = 0;

  sha_key_array.forEach((item, i) => {
    if(isNumeric(item)){
      offset += ASCII.indexOf(item) + i;
    }else {
      offset -= ASCII.indexOf(item) + i;
    }
  });

  org_array.forEach((item, i) => {

    str += encode_simple_2(item, i + ASCII.indexOf(sha_key_array[iter]) + offset)

    if(iter >= sha_key_array.length - 1){
      iter = 0;
    }else {
      iter += 1;
    }


  });


  return convert(str);
}

function decode_sha_1(original, key) {
  let str = "";
  let org_array = original.split('')
  org_array = cleanUp(org_array)
  let iter = 0;
  key += "il82Y7GlJSjeiVZSSgz9";
  let sha_key = SHA1(key);
  let sha_key_array = sha_key.split('');
  let offset = 0;

  sha_key_array.forEach((item, i) => {
    if(isNumeric(item)){
      offset += ASCII.indexOf(item) + i;
    }else {
      offset -= ASCII.indexOf(item) + i;
    }
  });

  org_array.forEach((item, i) => {

    str += decode_simple_2(item, i + ASCII.indexOf(sha_key_array[iter]) + offset)

    if(iter >= sha_key_array.length - 1){
      iter = 0;
    }else {
      iter += 1;
    }


  });


  return convert(str);
}

form1_bsp3.onsubmit = function(){
  out5.innerHTML = encode_sha_1(f5_t1.value, f5_t2.value);
  return false;
}


form2_bsp3.onsubmit = function(){
  out6.innerHTML = decode_sha_1(f6_t1.value, f6_t2.value);
  return false;
}
