// === immutableにobjのバリュー変更したい ===

let color_lawn = {
  title: "lawn",
  color: "#00FF00",
  rating: 0,
};

// コピー作成
// アロー関数で戻り値がobjのときは、丸かっこ
const rateColor = (color, rating) => ({
  ...color,
  rating,
});

console.log(rateColor(color_lawn, 5).rating);

// === immutableに色を追加したい ===

let list = [{ title: "Rad Red" }, { title: "Lawn" }, { title: "Party pink" }];

const addColor = (title, list) => [...list, { title }];

console.log(addColor("Glam Green", list).length);
