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
    stack = []                                          # blueprint stack kosong
    
    for char in expression: 
        if char.isnumeric():
            stack.append(int(char))
        else:
            operand2 = stack.pop()
            operand1 = stack.pop()
            if char == '+':
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
