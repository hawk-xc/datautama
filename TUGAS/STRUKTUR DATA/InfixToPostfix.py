# tugas fitri ning alisia kerkom
# 14 Juni 2023
# Struktur data

def infix_to_postfix(expression):                       # membuat fungsi untuk menampung variabel expression  
    precedence = {'+': 1, '-': 1, '*': 2, '/': 2}       # ini merupakan perbangingan prioritas yang disimpan dalam bentuk array
    stack = []                                          # berupa list kosong untuk menampung stack yang diproses oleh iterasi
    postfix = ''                                        # variabel postfix kosong 
    
    for char in expression:                             # iterasi untuk variabel expression sebagai char 
        if char.isalnum():                              # percabangan untuk memeriksa apakah variable iterasi char adalah bertipe data numerik
            postfix += char                             # menambahkan variabel postfix dengan hasil iterasi dari char
        elif char == '(':                               # apabila karakter openbrancket maka tambahkan string ' ( ' pada stack
            stack.append('(')                           # menambahkan pada stack dengan global function append
        elif char == ')':                               # apabila karakter closebrancket maka tambahkan string ' ) ' pada stack
            while stack and stack[-1] != '(':           # iterasi stack apabila not ' ( '
                postfix += stack.pop()                  # pop ke bagian pertama pada stack
            stack.pop()                                 # global function pop ( menghapus / mengembalikan elemen terakhir )
        else:                                           # tidak maka kerjakan ini
            while stack and stack[-1] != '(' and precedence[char] <= precedence.get(stack[-1], 0):      # perulangan untuk menentukan lokasi operator pada suatu list 
                postfix += stack.pop()                  # hapus atau kembalikan rule list   
            stack.append(char)                          # tambahkan list value stack ke (stack)
    
    while stack:                                        # lakukan iterasi pada stack
        postfix += stack.pop()                          # setiap loop akan mengembalikan nilai 1, artinya selalu bertambah 1 ketika mengulang kembali
    
    return postfix                                      # kembalikan nilai postfix ke fungsi

def evaluate_postfix(expression): # membuat fungsi evaluate_postfix dengan inputan variabel expression
    stack = []                                          # variabel list stack kosong
    
    for char in expression:                             # iterator inputan expression sebagai variabel char
        if char.isnumeric():                            # cek apabila variable iterasi char bertipe data numerik
            stack.append(int(char))                     # tambahkan ke list stack, tapi ubah char menjadi integer untuk diolah operasi matematika
        else:                                           # jika salah kerjakan ini (ulangi iterasi)
            operand2 = stack.pop()                      # tambahkan variabel operand2 pop stack 
            operand1 = stack.pop()                      # tambahkan variabel operand1 pop stack 
            if char == '+':                             # masukan percabangan  ( daftar kan inputan apabila memiliki operator )
                result = operand1 + operand2
            elif char == '-':
                result = operand1 - operand2
            elif char == '*':
                result = operand1 * operand2
            elif char == '/':
                result = operand1 / operand2
            stack.append(result)
    
    return stack.pop() # mengembalikan nilai stack

# Contoh penggunaan
infix_expression = input("Masukkan ekspresi matematika infix: ") # meminta inputan untuk memanggil function
postfix_expression = infix_to_postfix(infix_expression) # memanggil fungsi dengan variabel expression adalah infix-expression
result = evaluate_postfix(postfix_expression) # meminta variabel yang dikembalikan return pada fungsi

# tampilkan hasil / output
print("Ekspresi Infix:", infix_expression) 
print("Ekspresi Postfix:", postfix_expression)
print("Hasil:", result)
