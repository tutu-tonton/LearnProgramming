// データから、新しい型のデータ生成

const schools = ["Yorktown", "Washington & Liberty", "Wakefield"];

// 配列から文字列
console.log(schools.join(", "));

// 配列から配列
const wSchools = schools.filter((school) => school[0] === "W");
console.log(wSchools);

// 配列から要素削除
const cutSchool = (cut, list) => list.filter((school) => school !== cut);
console.log(cutSchool("Washington & Liberty", schools).join(", "));

// Array.map
// 引数：コールバック関数
// 戻り値：元の配列と同じサイズの配列
const highSchools = schools.map((school) => `${school} High School`);
console.log(highSchools.join("\n"));

// 文字列配列からオブジェクト配列へ
const highSchools = schools.map((school) => ({ name: school }));
console.log(highSchools);

// 配列のうち一つの要素だけ変更
const schools = [
  { name: "Yorktown" },
  { name: "Stratford" },
  { name: "Washington $ Liberty" },
  { name: "Wakefield" },
];
const updatedSchools = editName("Stratford", "HB Woodlawn", schools);
console.log(updatedSchools[1]);

const editName1 = (oldName, name, arr) =>
  arr.map((item) => {
    if (item.name === oldName) {
      return {
        ...item,
        name,
      };
    } else {
      return item;
    }
  });

const editName2 = (oldName, name, arr) =>
  arr.map((item) => (item.name === oldName ? { ...item, name } : item));

// オブジェクトから配列を得る
const schoolsObject = {
  Yorktown: 10,
  "Washington & Liberty": 2,
  Wakefield: 5,
};
const schoolArray = Object.keys(schoolsObject).map((key) => ({
  name: key,
  wins: schools[key],
}));
console.log(schoolArray);

// 配列から単一の値
const ages = [21, 18, 42, 40, 64, 63, 34];

const maxAge = ages.reduce((max, age) => {
  console.log(`${age} > ${max} = ${age > max}`);
  if (age > max) {
    return age;
  } else {
    return max;
  }
}, 0);
console.log("maxAge", maxAge);

// 配列をオブジェクトに変換
const colors = [
  {
    id: "xekare",
    title: "rad red",
    rating: 3,
  },
  {
    id: "jbwsof",
    title: "big blue",
    rating: 2,
  },
  {
    id: "prigbj",
    title: "grizzly grey",
    rating: 5,
  },
  {
    id: "ryhbhsl",
    title: "banana",
    rating: 1,
  },
];
const hashColors = colors.reduce((hash, { id, title, rating }) => {
  hash[id] = { title, rating };
  return hash;
}, {});
console.log(hashColors);

// 配列を異なる配列へ変換
// 重複削除して配列
// accの中に、対象要素が含まれるかどうか
const colors3 = ["red", "red", "green", "blue", "green"];
const uniqueColors = colors.reduce(
  (unique, color) =>
    unique.indexOf(color) !== -1 ? unique : [...unique, color],
  []
);
console.log(uniqueColors);
