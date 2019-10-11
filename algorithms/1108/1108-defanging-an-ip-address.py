def defangIPaddr(address: str) -> str:
    return address.replace('.', '[.]')


def defangIPaddrOne(address: str) -> str:
    return '[.]'.join(address.split('.'))


if __name__ == "__main__":
    print(defangIPaddr('255.100.50.0'))
    print(defangIPaddrOne('255.100.50.0'))
