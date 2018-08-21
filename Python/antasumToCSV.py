import pandas

pluviometro = pandas.read_excel('result/Telemetria_Relatorios - dmeenergeticadiariopadrecarlos.xlsx',
                                names=['data', 'chuva', 'nivel', 'vazao'],skiprows=4, skipfooter=1)
pluviometro['data'] = pandas.to_datetime(pluviometro['data'], format='%d/%m/%Y')
nivelEvazao = pandas.read_excel('result/Telemetria_Relatorios - dmeenergeticadiariaribeirao.xlsx',
                                names=['data', 'nivel', 'vazao'], skiprows=4, skip_footer=1)
nivelEvazao['data'] = pandas.to_datetime(nivelEvazao['data'], format='%d/%m/%Y')

pluviometro = pluviometro[['data', 'chuva', 'nivel', 'vazao']]

for x in pluviometro['chuva']:
    if (x == ""):
        x = float('NaN')

pluviometro['data'] = pluviometro['data'].dt.date
pluviometro['data'] = pandas.to_datetime(pluviometro['data'], format='%Y-%m-%d')
nivelEvazao['data'] = nivelEvazao['data'].dt.date
nivelEvazao['data'] = pandas.to_datetime(nivelEvazao['data'], format='%Y-%m-%d')

result = pandas.merge(nivelEvazao, pluviometro, on='data')
print(result)
pluviometro.to_csv('result/padrecarlos.csv', index=False, sep=';')