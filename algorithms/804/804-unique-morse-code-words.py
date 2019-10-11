def uniqueMorseRepresentations(words) -> int:
    ms = [".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---", "-.-", ".-..", "--",
          "-.", "---", ".--.", "--.-", ".-.", "...", "-", "..-", "...-", ".--", "-..-", "-.--", "--.."]
    tem = []

    for i in range(len(words)):
        s = ''
        for j in words[i]:
            s += ms[ord(j)-97]
        tem.append(s)

    return len(set(tem))


if __name__ == "__main__":
    print(uniqueMorseRepresentations(["gin", "zen", "gig", "msg"]))
