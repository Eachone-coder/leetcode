def judgeCircle(moves: str) -> bool:
    return moves.count('U') == moves.count('D') and moves.count('L') == moves.count('R') == 0


if __name__ == "__main__":
    print(judgeCircle('UD'))
