from tkinter import *
import tkinter as tk

janela = Tk()

class Application():
    def __init__(self):
        self.janela = janela
        self.tela()
        self.criando_btns()
        janela.mainloop()

    def tela(self):
        self.janela.title("Calculadora")
        self.janela.configure(bg='gray')
        self.janela.geometry("400x600")
        self.janela.resizable(True, True)
        self.janela.minsize(width=500, height=450)
        self.janela.maxsize(width=900, height=700)

    def criando_btns(self):
        self.btn_somar = Button(text= "+", bd=3, bg="white", fg="black")
        self.btn_somar.place(relx=0.5, rely=0.5, relheight=0.15, relwidth=0.1)
        

Application()