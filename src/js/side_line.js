let svg_line_l1 = document.getElementById('modern_line_l1');
let svg_line = document.getElementById('modern_line');

svg_line.setAttribute("height" , document.body.clientHeight);

generateSVGline(svg_line_l1);

function generateSVGline(svg) {
  let points = "20,0";
  let height = 0;
  let width = 20;

  let temp_bool = true;
  let random = 0;

  while(height < document.body.clientHeight){
    random = getRandomInt(100, 200);
    height += random;

    if(temp_bool){
      height -= random/2;

      random = getRandomInt(-120, 120)

      if(between(random, -80,80) ){
          if(random <= 0){
            random = -80;

          }
          if(random >= 0){
            random = 80;
          }
      }

      width += random;

      if(width > 250){
        width = 250;
        width -= random;
      }
      if(width < 20){
        width = 20;
        width -= random;
      }


      temp_bool = !temp_bool;
    }else{
      temp_bool = !temp_bool;
    }


    points += " "+width+","+height;


  }
  svg.setAttribute("points", points);

}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function between(x, min, max) {
  return x >= min && x <= max;
}
