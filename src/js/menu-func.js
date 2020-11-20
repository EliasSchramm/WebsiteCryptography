var current_page = 0
var sections = document.getElementsByClassName('content_section')

function recal() {
  for (i = 0; i < sections.length; i++) {
    if(i == current_page){
      sections[i].className = "content_section";
    }else {
      sections[i].className = "invi content_section";
    }
  }
  generateSVGline(svg_line_l1);
}

function switchPage(val) {
  current_page+=val;
  current_page = clamp(current_page, 0, sections.length - 1);
  recal();
}

function clamp(val, min, max) {
    return val > max ? max : val < min ? min : val;
}

function convert(str)
{
  str = str.replace(/&/g, "&amp;");
  str = str.replace(/>/g, "&gt;");
  str = str.replace(/</g, "&lt;");
  str = str.replace(/"/g, "&quot;");
  str = str.replace(/'/g, "&#039;");
  return str;
}

recal();
