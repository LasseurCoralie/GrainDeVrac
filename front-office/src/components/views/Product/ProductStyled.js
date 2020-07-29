import styled from 'styled-components';
import theme from '../../../theme/theme';

const ProductStyled = styled.div`
  div.fildAriane  {
    margin: 1em 7em;
    display: flex;
    justify-content: center;
    align-items: baseline;

    img {
      width: 20px;
      height: auto;
      transform: rotate(180deg);
      margin-right: .7em;
    }

    a {
      color: ${theme.colors.black};
    }
  }
  div.product-zn {
    margin: 0 1em 3em;

    img {
      width: 100%;
      height: auto;
      border: 1px solid ${theme.colors.black};
    }

    div.header {
      display: flex;
      justify-content: space-between;
      align-items: baseline;

      h3, p {
        font-weight: bold;
        margin-bottom: 0;
      }

      p.price {
        font-family: ${theme.fonts.special};
        font-size: 1.2em;
      }
    }

    p.description{
      font-style: italic;
    }

    p.bio, p.origin, p.available {
      margin: 0;
    }

    p.bio {
      font-weight: bold;
    }

    div.quantities {
      margin-top: 1em;
      display: flex;
      justify-content: space-between;
      align-items: center;
  
      div:last-child button {
        width: 100%;
      }

      div.quantity-zn {

        
        p.txt {
          font-weight: bold;
          margin-top: 0;
        }

        p.quantity {
          margin-top: 0;
        }

        div.txt-zn {
          display: flex;
          justify-content: space-between;
          width: 100%;
        }

        div.btn-zn {
          width: 100%;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;

          button {
            width: 100%;
            background-color: ${theme.colors.lightPurple};
            padding: 4px;
            font-size: 1.2em;
          }
          
          div:last-child button{
            background-color: ${theme.colors.purple};
          }
        }
      }
  
      div {
        width: 48%;
      }
    }
  }

  @media (min-width: 900px) {
    div.fildAriane {
      margin: -.5em 7em;
      justify-content: left;
    }

    div.product-zn {
      margin-top: 1em;
      display: flex;
      justify-content: space-between;

      img, div.content-zn {
        width: 48%;
      }

      img {
        object-fit: cover;
      }

      div.content-zn {
        div.header {
          h3, p.price {
            margin-top: 0;
          }
        }
      }
    }
  }
`;


export default ProductStyled;