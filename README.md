# Statamic Expires On
A Statamic 2.0 modifier for tag pairs that cannot be [filtered with conditions](https://docs.statamic.com/conditions) (aka not a collection or taxonomy) that checks for an expiration date, outputs items in the loop that either don't have one, or have one which is in the future.

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
