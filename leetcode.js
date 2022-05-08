//*************************************************************
//? TWO SUM
// ************************************************************

// var twoSum = function (nums, target) {
//   let prevData = {};
//   let twoSum = [];

//   for (let i in nums) {
//     let addend = target - nums[i];

//     if (addend in prevData) {
//       twoSum.push([addend, nums[i]]);
//     }

//     prevData[nums[i]] = i;
//   }
//   return twoSum;
// };

// let arr = [2, 7, 11, 15];
// const answers = twoSum(arr, 9);
// console.log("===================");
// console.log(answers);

//*************************************************************
//? Roman To Int
// ************************************************************

// let s = "MCMXCIV";
// var romanToInt = function (s) {
//   // largest to smallest: add them up
//   // smaller before larger: subtract smaller

//   // Dictionary to get values of roman Numerals by property name
//   let romanDict = {
//     I: 1,
//     V: 5,
//     X: 10,
//     L: 50,
//     C: 100,
//     D: 500,
//     M: 1000,
//   };

//   let arrayOfRomanNums = s.split("");
//   console.log(arrayOfRomanNums);

//   let romanSum = arrayOfRomanNums.reduce(
//     (total, currentVal, currentIndex, theArray) => {
//       // if there is still another element left AND the current element is less than next element
//       if (
//         theArray.length > currentIndex + 1 &&
//         romanDict[theArray[currentIndex]] <
//           romanDict[theArray[currentIndex + 1]]
//       ) {
//         return (total -= romanDict[theArray[currentIndex]]);
//       } else {
//         return (total += romanDict[theArray[currentIndex]]);
//       }
//     },
//     0 // initial value of total
//   );

//   console.log(romanSum);
//   return romanSum;
// };

// romanToInt(s);

//*************************************************************
//? Merge Sorted Lists
// ************************************************************

var mergeTwoLists = function (list1, list2) {
  const response = [...Array.from(list1), ...Array.from(list2)];
  console.log(response);
  return response.sort((a, b) => a - b);
};

let nums1 = [1, 2, 4];
let nums2 = [1, 3, 4];
mergeTwoLists(nums1, nums2);

//*************************************************************
//? Square Root
// ************************************************************

var mySqrt = function (x) {
  console.log(Math.sqrt(x));
};

mySqrt(4);
