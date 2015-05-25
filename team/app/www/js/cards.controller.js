angular.module('starter')
  .controller('CardsCtrl', function($rootScope,$scope, TDCardDelegate, $window,$state) {
    $scope.hideControls = false; 
    $rootScope.selectedItem; 
    $scope.selectItem = function(item){
      $rootScope.selectedItem = item; 
      $state.go("profile"); 
    }
    var cardTypes = [
       {
        image: './img/alex.png',
        name: "Alex", 
        bio: "Hi. I'm a Strategist and 3 things makes me HPIest: unassuming food that packs a punch in flavour, brilliant ideas rooted in simplicity and the smile a Volkswagen CC leaves on your face even at standstill. Eat, ideate, drive. Repeat.",
        title: "",
        email: "alex.goh@nagaddb.com.my",
        cars: "Polo Sedan, Jetta"
       },
       {
        image: './img/amy.png',
        name: "Amy", 
        bio: "Part time caffeine addict and a full time Brand Steward.  I’m the HPIest when I’m wandering in a foreign city and learning new cultures. A Volkswagen GTi makes my head turn, every single time. ",
        title: "",
        email: "amy.yep@nagaddb.com.my",
        cars: "Jetta, Touran, Volkwagen CC"
       },
       {
        image: './img/sen.png',
        name: "Sen Kiat", 
        bio: "Sen Kiat is a car nut from birth. By the age of 4, he was able to name every car on the street standing in the window of his dad's red Alfa Romeo Alfetta. His first job writing Honda car brochures led to his current gig as Creative Director. His idea of HPI is an open road and a car with a manual transmission. He can't wait for the upcoming Volkswagen Golf R420.",
        title: "",
        email: "senkiat.wong@nagaddb.com.my",
        cars: "Polo, Volkwagen CC, Passat"
       },

       {
        image: './img/kevan.png',
        name: "Kevan Lee", 
        bio: "General tv geek. Musicaholic. Friendly coffee fan. Devoted car aficionado. Unapologetic twitter buff.",
        title: "Social Media Strategist",
        email: "kevan.lee@lionandlion.com",
        cars: "Beetle, Volkwagen CC, Passat"
       },
       {
        image: './img/faris.png',
        name: "Faris Radzi", 
        bio: "Internet enthusiast. Devoted twitter fan. Bacon aficionado. Coffee lover. Pop culture nerd. Wannabe tv maven.",
        title: "Media & Analytics Specialist",
        email: "faris.radzi@lionandlion.com",
        cars: "Jetta, Touran, Golf GTI"
       },
       {
        image: './img/justin.png',
        name: "Justin Kuah", 
        bio: "Problem solver. Lifelong pop culture buff. Gamer. Bacon guru. Tv trailblazer. Twitteraholic. Introvert.",
        title: "Tech & Web Optimisation Specialist",
        email: "justin.kuah@lionandlion.com",
        cars: "Jetta, Touran, Volkwagen CC"
       },
       {
        image: './img/jerome.png',
        name: "Jerome Chan", 
        bio: "Tv trailblazer. Incurable coffee nerd. Music fanatic. Food practitioner. Zombie expert. Typical internet maven. Reader.",
        title: "Digital Designer",
        email: "jerome.chan@lionandion.com",
        cars: "Polo, Volkwagen CC, Passat, Scirocco"
       },
       {
        image: './img/sravanti.png',
        name: "Sravanti Uppaluri", 
        bio: "Twitter nerd. Friend of animals everywhere. Food aficionado. Award-winning tv advocate. Extreme entrepreneur.",
        title: "CRM Specialist",
        email: "sravanti.uppaluri@lionandlion.com",
        cars: "Beetle, Polo GTI, Passat, Touran"
       },
       {
        image: './img/roy.png',
        name: "Roy Vimalan", 
        bio: "Extreme travel aficionado. Typical problem solver. Zombie practitioner. Analyst. Food geek. Writer",
        title: "Creative Project Manager",
        email: "Roy.vimalan@lioandlion.com",
        cars: "Scirocco, Volkwagen CC, Beetle"
       },
       {
        image: './img/tanja.png',
        name: "Tanja Henkelmann", 
        bio: "Previous automotive experience – Communications Management at BMW. Devoted social media fan. Passionate food buff. Avid twitter junkie. Car-aholic. General coffee nerd. Unapologetic entrepreneur.",
        title: "Campaign Manager",
        email: "Tanja.Henkelmann@lioandlion.com",
        cars: "Scirocco, Volkwagen CC, Passat "
       },
       
      
    ];

    $scope.cardDestroyed = function(index) {
      $scope.cards.splice(index, 1);
      if($scope.cards.length == 0){
        $scope.addCard();
      }
    };

    $scope.addCard = function() {
      var tempA = shuffle(cardTypes); 
      for(var i=0;i<tempA.length;i++){
        var newCard = tempA[i];
        newCard.id = Math.random();  
        $scope.cards.unshift(angular.extend({}, newCard));
      }
    }
    $scope.cardSwipedLeft = function(e){
        TDCardDelegate.$getByHandle('friends').getFirstCard().swipe('left'); 
    }
    $scope.cardSwipedRight = function(e){
        TDCardDelegate.$getByHandle('friends').getFirstCard().swipe('right'); 
    }
    $scope.cards = [];
    $scope.addCard();

    function shuffle(array) {
      var i = array.length,
          j = 0,
          temp;
      while (i--) {
          j = Math.floor(Math.random() * (i+1));
          // swap randomly chosen element with current element
          temp = array[i];
          array[i] = array[j];
          array[j] = temp;

      }
      return array;
  }

  });