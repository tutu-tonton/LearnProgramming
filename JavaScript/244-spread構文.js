// スプレット構文
const directions = (...args) => {
  let [start, ...remaining] = args;
  let [finish, ...stops] = remaining.reverse();

  console.log(`drive through ${args.length} towns`);
  console.log(`start in ${start}`);
  console.log(`the destination is ${finish}`);
  console.log(`stopping ${stops.length} times in between`);
};
directions("Truckee", "Tahoe City", "Sunnyside", "Homewood", "Tahoma");

// スプレット構文を、オブジェクトで使用
const morning = {
  breakfast: "oatmeal",
  lunch: "peanut butter and jelly",
};
const dinner = "mac and cheese";

const backpackingMeals = {
  ...morning,
  dinner,
};
console.log(backpackingMeals);
