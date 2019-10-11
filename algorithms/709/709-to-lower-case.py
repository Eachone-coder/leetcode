def toLowerCase(str: str) -> str:
    return ''.join([chr(ord(s) + 32) if ord(s) >=65 and ord(s) <= 90 else s for s in str])


if __name__ == "__main__":
    print(toLowerCase('al&phaBET'))
