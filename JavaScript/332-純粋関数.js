// 純粋関数とは
// 引数や関数外で定義された変数に直接変更を加えない

const frederick = {
  name: "Frederick Douglass",
  canRead: false,
  canWrite: false,
};
const selfEducate = (person) => ({
  ...person,
  canRead: true,
  canWrite: true,
});
console.log(selfEducate(frederick));
