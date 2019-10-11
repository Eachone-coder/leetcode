def main(jewels, stones):
    number = 0
    for s in stones:
        if s in jewels:
            number += 1
    return number


def numJewelsInStones(J: str, S: str) -> int:
    return len([i for i in S if i in J])


if __name__ == "__main__":
    print(main('aA', 'aAADDdfFwW'))
    print(numJewelsInStones('aA', 'aAADDdfFwW'))
