# Statamic Expires On
A Statamic 2.0 modifier addon that checks for an expiration date, and outputs items that don't have one, or that have one which is in the future.

## Usage

### Assuming Today is `2018-1-26`

### YAML
```
blocks:
  - 
    block_title: Block A
    expiration_date: 2018-02-28
  - 
    block_title: Block B
    expiration_date: 2017-04-13
  - 
    block_title: Block C
  - 
    block_title: Block D
```

### Antlers
```
{{ blocks expires_on="expiration_date" }}
  {{ block_title }}<br>
{{ /blocks }}
```

### Outputs
```
Block A
Block C
Block D
```
