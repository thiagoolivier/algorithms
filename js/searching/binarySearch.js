function binarySearch(sortedArr, target) {
  let start = 0;
  let end = sortedArr.length - 1;
  
  while (start <= end) {
    let middle = Math.floor((start + end) / 2);
    
    if (sortedArr[middle] === target) {
      return middle;
    } else if (sortedArr[middle] < target) {
      start = middle + 1;
    } else {
      end = middle - 1;
    }    
  }
  return -1;
}
