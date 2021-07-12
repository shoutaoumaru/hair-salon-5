$(function () {
  $('#js-infiniteslide').infiniteslide({
    speed: 20, //速さ　単位はpx/秒です。
    direction: 'left', //up/down/left/rightから選択
    pauseonhover: true, //マウスオーバーでストップ
    responsive: false, //子要素の幅を%で指定しているとき
    clone: 1, //子要素の複製回数
  });
});