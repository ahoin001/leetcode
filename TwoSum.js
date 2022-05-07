var twoSum = function (nums, target) {
  let prevData = {};
  let twoSum = [];

  for (let i in nums) {
    let addend = target - nums[i];

    if (addend in prevData) {
      twoSum.push([addend, nums[i]]);
    }

    prevData[nums[i]] = i;
  }
  return twoSum;
};

let arr = [2, 7, 11, 15];
const answers = twoSum(arr, 9);
console.log("===================");
console.log(answers);
