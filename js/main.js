
jQuery('.control').on('click', function() {
  jQuery(this).toggleClass('pause play');
});
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

jQuery(function() {
    let header = jQuery('.header');
     
    jQuery(window).scroll(function() {
      if(jQuery(this).scrollTop() > 1) {
       header.addClass('header_fixed');
      } else {
       header.removeClass('header_fixed');
      }
    });
   });

   jQuery('img.img-svg').each(function(){
    var jQueryimg = jQuery(this);
    var imgClass = jQueryimg.attr('class');
    var imgURL = jQueryimg.attr('src');
    jQuery.get(imgURL, function(data) {
      var jQuerysvg = jQuery(data).find('svg');
      if(typeof imgClass !== 'undefined') {
        jQuerysvg = jQuerysvg.attr('class', imgClass+' replaced-svg');
      }
      jQuerysvg = jQuerysvg.removeAttr('xmlns:a');
      if(!jQuerysvg.attr('viewBox') && jQuerysvg.attr('height') && jQuerysvg.attr('width')) {
        jQuerysvg.attr('viewBox', '0 0 ' + jQuerysvg.attr('height') + ' ' + jQuerysvg.attr('width'))
      }
      jQueryimg.replaceWith(jQuerysvg);
    }, 'xml');
  });
  jQuery(document).ready(function() {
    jQuery('.popup-with-form').magnificPopup({
      type: 'inline',
      preloader: false,
      focus: '#name',
  
      // When elemened is focused, some mobile browsers in some cases zoom in
      // It looks not nice, so we disable it:
      callbacks: {
        beforeOpen: function() {
          if(jQuery(window).width() < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });
  });
  jQuery(Document).on('click','.spoiler-title', function(e){
		e.preventDefault();
		jQuery(this).parent().children('.spoiler').toggle();
		jQuery(this).toggleClass("active");
	});
  jQuery(Document).on('click','.document-title', function(e){
		e.preventDefault();
		jQuery(this).parent().children('.document-spoiler').toggle();
		jQuery(this).toggleClass("active");
	});
 var aHouseValues = new Array(
    "Минск, Борисов, Молодечно, Жодино,Слуцк,Дзержинск,	Вилейка,	Марьина Горка,Столбцы,Смолевичи,Фаниполь,Несвиж",
    "Брест, Пинск, Барановичи, Кобрин, Берёза,Лунинец,	Ивацевичи,	Пружаны,Иваново,Дрогичин,Ганцевичи,Жабинка,Столин",
    "Витебск, Полоцк, Орша, Новополоцк,	Поставы,Глубокое,Лепель,Новолукомль,Городок,Барань,Браслав",
    "Гомель, Туров, Мозырь, Солигорск, Жлобин, Cветлогорск, Речица, Калинковичи, Рогачёв,	Добруш,	Житковичи",
    "Гродно, Лида, Cлоним, Волковыск, Сморгонь, Новогрудок,Ошмяны,Мосты,Щучин,Скидель,Березовка,Островец,Дятлово,Ивье,Свислочь",
    "Могилёв, Бобруйск, Горки, Осиповичи,Кричев,Быхов,Климовичи,Шклов,	Костюковичи",
    );
    
    // ф-ция, возвращающая массив городов по заданной стране
    function getHouseValuesByStreet(index){
        var sHouseValues = aHouseValues[index];
        return sHouseValues.split(","); // преобразуем строку в массив городов
    }
    
    // ф-ция, выводящая динамически список городов
    function MkHouseValues(index){
        var aCurrHouseValues = getHouseValuesByStreet(index);
        var nCurrHouseValuesCnt = aCurrHouseValues.length;
        var oHouseList = document.forms["address"].elements["city"];
        var oHouseListOptionsCnt = oHouseList.options.length;
        oHouseList.length = 0; // удаляем все элементы из списка городов
        for (i = 0; i < nCurrHouseValuesCnt; i++){
            // далее мы добавляем необходимые города в список
            if (document.createElement){
                var newHouseListOption = document.createElement("OPTION");
                newHouseListOption.text = aCurrHouseValues[i];
                newHouseListOption.value = aCurrHouseValues[i];
                // тут мы используем для добавления элемента либо метод IE, либо DOM
                (oHouseList.options.add) ? oHouseList.options.add(newHouseListOption) : oHouseList.add(newHouseListOption, null);
            }else{
                // для NN3.x-4.x
                oHouseList.options[i] = new Option(aCurrHouseValues[i], aCurrHouseValues[i], false, false);
            }
        }
    }
    
    // инициируем изменение элементов в списке городов, в зависимости от текущей страны
    MkHouseValues(document.forms["address"].elements["area"].selectedIndex);


    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

