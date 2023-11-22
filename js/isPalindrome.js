function isPalindrome(sourceStr, start = 0, end = sourceStr.length - 1) {
    if(start >= end) return true;

    if(sourceStr[start] !== sourceStr[end]) return false;

    return isPalindrome(sourceStr, start + 1, end - 1);
}