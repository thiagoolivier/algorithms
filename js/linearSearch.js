// Search through the input array for the target value and return the index of the first appearance.
function linearSearch(sourceArr, target) {
  if (sourceArr.length === 0) return -1;

  for (let i = 0; i < sourceArr.length; i++) {
    if (sourceArr[i] === target) return i;
  }

  return -1;
}
