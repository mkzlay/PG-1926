#Çalıştırınca sayı girmenizi ister. 
#Sayı girdikten sonra çıkmak için 'c' yazınız.
#Listenin içerisindeki en büyük tek sayıyı ekrana yazdırır.

deger = None
seri = []
x = 0

while True:
    deger = input("Sayı giriniz :")

    try:
        if deger == "c":
            break
        else:
            seri.append(int(deger))
    except:
        print('lütfen sayı giriniz')


print(format(seri))

for i in seri :
    if i % 2==1 and i>=x :
        x=i

print('en büyük tek sayı: ', x)