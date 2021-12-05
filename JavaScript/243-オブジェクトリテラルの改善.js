// プロパティ名省略
const name1 = "Tallac";
const elevation = 9738;

const funHike = { name1, elevation }; // { name:name, elevation:elevation }

// オブジェクトリテラル内に関数記述する際には、functionキーワード省略できる
const skier = {
  name1,
  sound,
  powderYell() {
    let yell = this.sound.toUpperCase();
    console.log(`${yell} ${yell} ${yell}`);
  },
  speed(mph) {
    this.speed = mph;
    console.log("speed:", mph);
  },
};
