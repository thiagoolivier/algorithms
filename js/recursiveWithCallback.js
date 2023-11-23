function someRecursive(inputArr, callback) {
  if (inputArr.length === 0) return false;
  if (callback(inputArr[0])) return true;
  return someRecursive(inputArr.slice(1), callback);
}

// Example with callback.
someRecursive([2, 2, 2, 4, 5], (num) => {
  let result = num % 2 === 0 ? true : false;
  return result;
});
