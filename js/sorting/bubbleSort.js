function bubbleSort(sourceArr) {
  if(sourceArr.length === 0) return [];
  
  for (let i = sourceArr.length - 1; i >= 1; i--) {
    let noSwaps = true;
    for (let j = 0; j < i; j++) {
      if (sourceArr[j] > sourceArr[j + 1]) {
        [sourceArr[j], sourceArr[j+1]] = [sourceArr[j+1], sourceArr[j]];
        noSwaps = false;
      }
    }
    if (noSwaps) break;
  }

  return sourceArr;
}
